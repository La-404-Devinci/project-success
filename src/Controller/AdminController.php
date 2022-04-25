<?php

namespace App\Controller;

use App\Controller\User;
use App\Entity\News;
use App\Repository\NewsRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin')]
class AdminController extends AbstractController
{
    #[Route('/', name: 'dashboard')]
    public function index(): Response
    {
        return $this->redirectToRoute('dashboard_news_index');
    }

    #[Route('/users', name: 'dashboard_users_index')]
    public function user_index(UserRepository $userRepository): Response
    {
        return $this->render('admin/users/index.html.twig', [
            'users' => $userRepository->findAll()
        ]);
    }

    #[Route('/users/{id}/edit', name: 'dashboard_users_edit')]
    public function user_edit(User $user): Response
    {
        return $this->render('admin/users/edit.html.twig', [
            'user' => $user
        ]);
    }

    #[Route('/users/{id}', name: 'dashboard_users_delete')]
    public function user_delete(User $user): Response
    {
        return $this->render('admin/users/index.html.twig', [
            'user' => $user
        ]);
    }

    #[Route('/news', name: 'dashboard_news_index')]
    public function news_index(NewsRepository $newsRepository): Response
    {
        return $this->render('admin/news/index.html.twig', [
            'news' => $newsRepository->findAll()
        ]);
    }

    #[Route('/news/create', name: 'dashboard_news_create')]
    public function news_create(Request $request, EntityManagerInterface $entityManager): Response
    {
        return $this->render('admin/news/create.html.twig');
    }

    #[Route('/news/{id}/edit', name: 'dashboard_news_edit')]
    public function news_edit(News $news): Response
    {
        return $this->render('admin/news/edit.html.twig', [
            'news' => $news
        ]);
    }
}
