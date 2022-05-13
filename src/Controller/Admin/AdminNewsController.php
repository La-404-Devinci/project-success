<?php

namespace App\Controller\Admin;

use App\Entity\News;
use App\Form\NewsType;
use App\Repository\NewsRepository;
use App\Services\UploadFileHelper;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/news')]
class AdminNewsController extends AbstractController
{
    #[Route('/', name: 'dashboard_news_index')]
    public function index(NewsRepository $newsRepository): Response
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

    #[Route('/create', name: 'dashboard_news_create')]
    public function create(Request $request, EntityManagerInterface $entityManager, UploadFileHelper $uploadFile): Response
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

    #[Route('/{id}/edit', name: 'dashboard_news_edit')]
    public function edit(News $news, Request $request, UploadFileHelper $uploadFile, EntityManagerInterface $manager): Response
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

    #[Route('/{id}', name: 'dashboard_news_delete')]
    public function delete(News $news, Request $request, EntityManagerInterface $manager): Response
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
