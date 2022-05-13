<?php

namespace App\Controller\Admin;

use App\Repository\ResourceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/resource')]
class AdminResourceController extends AbstractController
{
    #[Route('/', name: 'dashboard_resource_index')]
    public function index(ResourceRepository $resourceRepository): Response
    {
        $resources = $resourceRepository->findAll();
        return $this->render('admin/resources/index.html.twig', [
            'resources' => $resources
        ]);
    }
}
