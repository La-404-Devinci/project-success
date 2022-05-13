<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/users')]
class AdminUserController extends AbstractController
{
    #[Route('/', name: 'dashboard_users_index')]
    public function index(UserRepository $userRepository): Response
    {
        if($this->isGranted('ROLE_ADMIN')) {
            return $this->render('admin/users/index.html.twig', [
                'users' => $userRepository->findAll()
            ]);
        }
        else {
            return $this->redirectToRoute('home');
        }
    }

    #[Route('/{id}', name: 'dashboard_users_delete')]
    public function delete(User $user, EntityManagerInterface $manager, Request $request): Response
    {
        if($this->isGranted('ROLE_ADMIN')) {
            if($this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) {
                $manager->remove($user);
                $manager->flush();
            }
            return $this->redirectToRoute('dashboard_users_index', [], Response::HTTP_SEE_OTHER);
        }
        else {
            return $this->redirectToRoute('home');
        }
    }

    #[Route('/{id}/authorize', name: 'dashboard_users_authorize')]
    public function authorize(User $user, EntityManagerInterface $manager, Request $request): Response
    {
        if($this->isGranted('ROLE_ADMIN')) {
            if($this->isCsrfTokenValid('authorize'.$user->getId(), $request->request->get('_token'))) {
                $user->setRoles(["ROLE_ADMIN"]);
                $manager->persist($user);
                $manager->flush();
            }
            return $this->redirectToRoute('dashboard_users_index', [], Response::HTTP_SEE_OTHER);
        }
        else {
            return $this->redirectToRoute('dashboard');
        }
    }

    #[Route('/{id}/unauthorized', name: 'dashboard_users_unauthorized')]
    public function unauthorized(User $user, EntityManagerInterface $manager, Request $request): Response
    {
        if($this->isGranted('ROLE_ADMIN')) {
            if($this->isCsrfTokenValid('unauthorized'.$user->getId(), $request->request->get('_token'))) {
                $user->setRoles([]);
                $manager->persist($user);
                $manager->flush();
            }
            return $this->redirectToRoute('dashboard_users_index', [], Response::HTTP_SEE_OTHER);
        }
        else {
            return $this->redirectToRoute('dashboard');
        }
    }
}
