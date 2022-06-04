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
    public function __construct(
        protected UserRepository $userRepository,
    ){}

    public function isSuperAdmin()
    {
        if(!$this->isGranted('ROLE_SUPER_ADMIN')) {
            return $this->redirectToRoute('dashboard');
        }
    }

    #[Route('/', name: 'dashboard_users_index')]
    public function index(): Response
    {
        $this->isSuperAdmin();
        $users = $this->userRepository->findAll();
        return $this->render('admin/users/index.html.twig', [
            'users' => $users,
        ]);
    }

    #[Route('/{id}', name: 'dashboard_users_delete')]
    public function delete(Request $request, User $user): Response
    {
        $this->isSuperAdmin();
        if($this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) {
            $this->userRepository->remove($user);
        }
        return $this->redirectToRoute('dashboard_users_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{id}/authorize', name: 'dashboard_users_authorize')]
    public function authorize(User $user, EntityManagerInterface $manager, Request $request): Response
    {
        $this->isSuperAdmin();
        if($this->isCsrfTokenValid('authorize'.$user->getId(), $request->request->get('_token'))) {
            $user->setRoles(["ROLE_ADMIN"]);
            $manager->persist($user);
            $manager->flush();
        }
        return $this->redirectToRoute('dashboard_users_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{id}/superauthorize', name: 'dashboard_users_superauthorize')]
    public function superauthorize(User $user, EntityManagerInterface $manager, Request $request): Response
    {
        $this->isSuperAdmin();
        if($this->isCsrfTokenValid('authorize'.$user->getId(), $request->request->get('_token'))) {
            $user->setRoles(["ROLE_SUPER_ADMIN", "ROLE_ADMIN"]);
            $manager->persist($user);
            $manager->flush();
        }
        return $this->redirectToRoute('dashboard_users_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{id}/unauthorized', name: 'dashboard_users_unauthorized')]
    public function unauthorized(User $user, Request $request): Response
    {
        $this->isSuperAdmin();
        if($this->isCsrfTokenValid('unauthorized'.$user->getId(), $request->request->get('_token'))) {
            $user->setRoles([]);
            $this->userRepository->add($user);
        }
        return $this->redirectToRoute('dashboard_users_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{id}/superunauthorized', name: 'dashboard_users_superunauthorized')]
    public function superunauthorized(User $user, EntityManagerInterface $manager, Request $request): Response
    {
        $this->isSuperAdmin();
        if($this->isCsrfTokenValid('unauthorized'.$user->getId(), $request->request->get('_token'))) {
            $user->setRoles(["ROLE_ADMIN"]);
            $this->userRepository->add($user);
        }
        return $this->redirectToRoute('dashboard_users_index', [], Response::HTTP_SEE_OTHER);
    }
}
