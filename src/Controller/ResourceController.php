<?php

namespace App\Controller;

use App\Entity\Resource;
use App\Repository\ResourceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/resource')]
class ResourceController extends AbstractController
{
    #[Route('/', name: 'app_resource')]
    public function index(ResourceRepository $resourceRepository): Response
    {
        $resources = $resourceRepository->findAll();
        return $this->render('resource/index.html.twig', [
            'resources' => $resources
        ]);
    }

    #[Route('/{id}', name: 'app_resource_show')]
    public function show(Resource $resource)
    {
        return $this->render('resource/show.html.twig', [
            'resource' => $resource
        ]);
    }
}
