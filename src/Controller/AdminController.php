<?php

namespace App\Controller;

use App\Entity\News;
use App\Entity\User;
use App\Form\NewsType;
use App\Repository\NewsRepository;
use App\Repository\UserRepository;
use App\Services\UploadFileHelper;
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
        if($this->isGranted('ROLE_ADMIN')) {
            return $this->redirectToRoute('dashboard_news_index');
        }
        else {
            return $this->redirectToRoute('home');
        }
    }

    #[Route('/users', name: 'dashboard_users_index')]
    public function user_index(UserRepository $userRepository): Response
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

    #[Route('/users/{id}/edit', name: 'dashboard_users_edit')]
    public function user_edit(User $user): Response
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

    #[Route('/users/{id}', name: 'dashboard_users_delete')]
    public function user_delete(User $user, EntityManagerInterface $manager, Request $request): Response
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

    #[Route('/news', name: 'dashboard_news_index')]
    public function news_index(NewsRepository $newsRepository): Response
    {
        if($this->isGranted('ROLE_ADMIN')) {

            $news = $newsRepository->findAll();
            return $this->render('admin/news/index.html.twig', [
                'news' => $news
            ]);
        }
        else {
            return $this->redirectToRoute('home');
        }
    }

    #[Route('/news/create', name: 'dashboard_news_create')]
    public function news_create(Request $request, EntityManagerInterface $entityManager, UploadFileHelper $uploadFile): Response
    {
        if($this->isGranted('ROLE_ADMIN')) {
            $news = new News();
            $form = $this->createForm(NewsType::class, $news);
            $form->handleRequest($request);
            if($form->isSubmitted() && $form->isValid()) {
                $image = $form->get('img')->getData();
                $news->setImg($uploadFile->upload($image));
                $news->setUser($this->getUser());
                $entityManager->persist($news);
                $entityManager->flush();
                return $this->redirectToRoute('news_show', ['id' => $news->getId()]);
            }
            return $this->renderForm('admin/news/create.html.twig', [
                'news' => $news,
                'form' => $form
            ]);
        }
        else {
            return $this->redirectToRoute('home');
        }
    }

    #[Route('/news/{id}/edit', name: 'dashboard_news_edit')]
    public function news_edit(News $news, Request $request, UploadFileHelper $uploadFile, EntityManagerInterface $manager): Response
    {
        if($this->isGranted('ROLE_ADMIN')) {
            $form = $this->createForm(NewsType::class, $news);
            $form->handleRequest($request);

            if($form->isSubmitted() && $form->isValid()) {
                if ($image = $form->get('img')->getData()) {
                    $news->setImg($uploadFile->upload($image));
                }
                $manager->flush();
                return $this->redirectToRoute('news_show', ['id' => $news->getId()]);
            }

            return $this->renderForm('admin/news/edit.html.twig', [
                'news' => $news,
                'form' => $form
            ]);
        }
        else {
            return $this->redirectToRoute('home');
        }
    }

    #[Route('/news/{id}', name: 'dashboard_news_delete')]
    public function news_delete(News $news, Request $request, EntityManagerInterface $manager): Response
    {
        if($this->isGranted('ROLE_ADMIN')) {
            if($this->isCsrfTokenValid('delete'.$news->getId(), $request->request->get('_token'))) {
                $manager->remove($news);
                $manager->flush();
            }
            return $this->redirectToRoute('dashboard_news_index', [], Response::HTTP_SEE_OTHER);
        }
        else {
            return $this->redirectToRoute('home');
        }
    }
}
