<?php

namespace App\Controller;

use App\Entity\News;
use App\Repository\NewsRepository;
use App\Repository\PartnerRepository;
use App\Repository\ResourceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AppController extends AbstractController
{
    // Home Page
    #[Route('/', name: 'home')]
    public function index(PartnerRepository $partnerRepository): Response
    {
        $partners = $partnerRepository->findall();
        return $this->render('app/index.html.twig', [
            'partners' => $partners,
        ]);
    }

    // News Pages
    #[Route('/news', name: 'news_index')]
    public function newsIndex(NewsRepository $newsRepository): Response
    {
        $news = $newsRepository->findAll();
        return $this->render('news/index.html.twig', [
            'news' => $news,
        ]);
    }

    #[Route('/news/{id}', name: 'news_show')]
    public function newsCreate(News $news): Response
    {
        return $this->render('news/show.html.twig', [
            'news' => $news,
        ]);
    }

    // Media Page
    #[Route('/media', name: 'media_index')]
    public function mediaIndex(): Response
    {
        return $this->render('media/index.html.twig');
    }

    // Resources Page
    #[Route('/resources', name: 'resources_index')]
    public function resourcesIndex(ResourceRepository $resourceRepository): Response
    {
        $resources = $resourceRepository->findAll();
        return $this->render('resources/index.html.twig', [
            'resources' => $resources,
        ]);
    }

    // Admin redirection
    #[Route('/admin', name: 'dashboard')]
    public function admin(): Response
    {
        if($this->isGranted('ROLE_ADMIN')) {
            return $this->redirectToRoute('dashboard_news_index');
        }
        else {
            return $this->redirectToRoute('home');
        }
    }
}