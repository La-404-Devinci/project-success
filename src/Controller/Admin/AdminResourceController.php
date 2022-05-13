<?php

namespace App\Controller\Admin;

use App\Entity\Resource;
use App\Form\ResourceType;
use App\Repository\ResourceRepository;
use App\Services\UploadFileHelper;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
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

    #[Route('/create', name: 'dashboard_resource_create')]
    public function create(Request $request, EntityManagerInterface $entityManager, UploadFileHelper $uploadFile): Response
    {
        $resource = new Resource();
        $form = $this->createForm(ResourceType::class, $resource);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            // Check if a file was set and if it's, set link to null
            if (($file = $form->get('file')->getData()) !== null) {
                $resource->setFile($uploadFile->upload($file));
                $resource->setLink(null);
            }
            $entityManager->persist($resource);
            $entityManager->flush();
            return $this->redirectToRoute('dashboard_resource_index');
        }

        return $this->renderForm('admin/resources/create.html.twig', [
            'resource' => $resource,
            'form' => $form,
        ]);
    }

    #[Route('{id}', name: 'dashboard_resource_delete')]
    public function delete(Resource $resource ,Request $request, EntityManagerInterface $manager)
    {
        if($this->isGranted('ROLE_ADMIN')) {
            if($this->isCsrfTokenValid('delete'.$resource->getId(), $request->request->get('_token'))) {
                $manager->remove($resource);
                $manager->flush();
            }
            return $this->redirectToRoute('dashboard_resource_index', [], Response::HTTP_SEE_OTHER);
        }
        else {
            return $this->redirectToRoute('home');
        }
    }
}
