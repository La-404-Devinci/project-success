<?php

namespace App\Controller;

use App\Repository\NewsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AppController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(NewsRepository $newsRepository): Response
    {
        $news = $newsRepository->findBy(criteria: [], orderBy: ['createdAt'=> 'DESC'], limit: 3);
        return $this->render('app/index.html.twig', [
            'news' => $news
        ]);
    }
}
