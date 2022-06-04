<?php

namespace App\Controller;

use App\Repository\PartnerRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AppController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(PartnerRepository $partnerRepository): Response
    {
        $partners = $partnerRepository->findall();
        return $this->render('app/index.html.twig', [
            'partners' => $partners,
        ]);
    }
}
