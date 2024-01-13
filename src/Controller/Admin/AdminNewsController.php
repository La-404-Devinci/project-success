<?php

namespace App\Controller\Admin;

use App\Entity\News;
use App\Form\NewsType;
use App\Repository\NewsRepository;
use App\Services\UploadFileService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/news')]
class AdminNewsController extends AbstractController
{
    public function __construct(
        protected NewsRepository $newsRepository,
        protected UploadFileService $uploadFile,
    ){}

    public function isAdmin()
    {
        if(!$this->isGranted('ROLE_ADMIN')) {
            return $this->redirectToRoute('home');
        }
    }

    #[Route('/', name: 'dashboard_news_index')]
    public function index(): Response
    {
        $this->isAdmin();
        $news = $this->newsRepository->findBy([], ['id' => 'DESC']);
        return $this->render('admin/news/index.html.twig', [
            'news' => $news
        ]);
    }

    #[Route('/create', name: 'dashboard_news_create')]
    public function create(Request $request): Response
    {
        $this->isAdmin();
        $news = new News();
        $form = $this->createForm(NewsType::class, $news);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $image = $form->get('img')->getData();
            $news->setImg($this->uploadFile->upload($image));
            $news->setUser($this->getUser());
            $this->newsRepository->add($news);
            return $this->redirectToRoute('news_show', ['id' => $news->getId()]);
        }
        return $this->renderForm('admin/news/create.html.twig', [
            'news' => $news,
            'form' => $form
        ]);
    }

    #[Route('/{id}/edit', name: 'dashboard_news_edit')]
    public function edit(Request $request, News $news): Response
    {
        $this->isAdmin();
        $form = $this->createForm(NewsType::class, $news);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            if ($image = $form->get('img')->getData()) {
                $news->setImg($this->uploadFile->upload($image));
            }
            $this->newsRepository->add($news);
            return $this->redirectToRoute('news_show', ['id' => $news->getId()]);
        }
        return $this->renderForm('admin/news/edit.html.twig', [
            'news' => $news,
            'form' => $form
        ]);
    }

    #[Route('/{id}', name: 'dashboard_news_delete')]
    public function delete(Request $request, News $news): Response
    {
        $this->isAdmin();
        if($this->isCsrfTokenValid('delete'.$news->getId(), $request->request->get('_token'))) {
            $this->newsRepository->remove($news);
        }
        return $this->redirectToRoute('dashboard_news_index', [], Response::HTTP_SEE_OTHER);
    }
}
