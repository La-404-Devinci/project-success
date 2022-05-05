<?php

namespace App\Controller;

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

    #[Route('/{id}/edit', name: 'dashboard_users_edit')]
    public function edit(User $user): Response
    {
        if($this->isGranted('ROLE_ADMIN')) {
            return $this->render('admin/users/edit.html.twig', [
                'user' => $user
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


}
