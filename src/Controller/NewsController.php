<?php

namespace App\Controller;

use App\Entity\News;
use App\Repository\NewsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/news')]
class NewsController extends AbstractController
{
    #[Route('/', name: 'news_index')]
    public function index(NewsRepository $newsRepository): Response
    {
        $news = $newsRepository->findAll();
        return $this->render('news/index.html.twig', [
            'news' => $news
        ]);
    }

    #[Route('/{id}', name: 'news_show')]
    public function show(News $news) : Response
    {
        return $this->render('news/show.html.twig', [
            'news' => $news
        ]);
    }
}
