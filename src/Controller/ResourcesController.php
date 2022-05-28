<?php

namespace App\Controller;

use App\Entity\Resource;
use App\Repository\ResourceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/resources')]
class ResourcesController extends AbstractController
{
    #[Route('/', name: 'resources_index')]
    public function index(ResourceRepository $resourceRepository): Response
    {
        if(!$this->isGranted('ROLE_ADMIN')) {
            return $this->redirectToRoute('home');
        }
        $resources = $resourceRepository->findAll();
        return $this->render('resources/index.html.twig', [
            'resources' => $resources
        ]);
    }

    #[Route('/{id}', name: 'resources_show')]
    public function show(Resource $resource)
    {
        return $this->render('resources/show.html.twig', [
            'resource' => $resource
        ]);
    }
}
