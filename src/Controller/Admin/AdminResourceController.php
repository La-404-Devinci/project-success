<?php

namespace App\Controller\Admin;

use App\Entity\Resource;
use App\Form\ResourceType;
use App\Repository\ResourceRepository;
use App\Services\UploadFileService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/resources')]
class AdminResourceController extends AbstractController
{
    public function __construct(
        protected ResourceRepository $resourceRepository,
        protected UploadFileService $uploadFileService,
    ){}

    public function isAdmin()
    {
        if(!$this->isGranted('ROLE_ADMIN')) {
            return $this->redirectToRoute('home');
        }
    }

    #[Route('/', name: 'dashboard_resources_index')]
    public function index(): Response
    {
        $this->isAdmin();
        $resources = $this->resourceRepository->findAll();
        return $this->render('admin/resources/index.html.twig', [
            'resources' => $resources
        ]);
    }

    #[Route('/create', name: 'dashboard_resources_create')]
    public function create(Request $request): Response
    {
        $this->isAdmin();
        $resource = new Resource();
        $form = $this->createForm(ResourceType::class, $resource);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            // Check if a file was set and if it's, set link to null
            if (($file = $form->get('file')->getData()) !== null) {
                $resource->setFile($this->uploadFileService->upload($file));
                $resource->setLink('/assets/uploads/'.$resource->getFile());
            }
            else {
                $resource->setFile(null);
            }
            $this->resourceRepository->add($resource);
            return $this->redirectToRoute('dashboard_resources_index');
        }
        return $this->renderForm('admin/resources/create.html.twig', [
            'resource' => $resource,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/delete', name: 'dashboard_resources_delete')]
    public function delete(Request $request, Resource $resource)
    {
        $this->isAdmin();
        if($this->isCsrfTokenValid('delete'.$resource->getId(), $request->request->get('_token'))) {
            $this->resourceRepository->remove($resource);
        }
        return $this->redirectToRoute('dashboard_resources_index', [], Response::HTTP_SEE_OTHER);
    }
}
