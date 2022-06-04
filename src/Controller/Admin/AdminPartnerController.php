<?php

namespace App\Controller\Admin;

use App\Entity\News;
use App\Entity\Partner;
use App\Form\PartnerType;
use App\Repository\PartnerRepository;
use App\Services\UploadFileService;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/partners')]
class AdminPartnerController extends AbstractController
{
    public function __construct(
        protected PartnerRepository $partnerRepository,
        protected UploadFileService $uploadFileHelper,
    ){}

    public function isSuperAdmin()
    {
        if(!$this->isGranted('ROLE_SUPER_ADMIN')) {
            return $this->redirectToRoute('dashboard');
        }
    }

    #[Route('/', name: 'dashboard_partners_index')]
    public function index(PartnerRepository $partnerRepository): Response
    {
        $this->isSuperAdmin();
        $partners = $partnerRepository->findAll();
        return $this->render('admin/partners/index.html.twig', [
            'partners' => $partners,
        ]);
    }

    #[Route('/create', name: 'dashboard_partners_create')]
    public function create(Request $request, EntityManagerInterface $manager): Response
    {
        $this->isSuperAdmin();
        $partner = new Partner();
        $form = $this->createForm(PartnerType::class, $partner);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $partner->setImage($this->uploadFileHelper->upload($form->get('image')->getData()));
            $this->partnerRepository->add($partner);
            return $this->redirectToRoute('dashboard_partners_index');
        }
        return $this->renderForm('admin/partners/create.html.twig', [
            'partner' => $partner,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/delete', name: 'dashboard_partners_delete')]
    public function delete(Request $request, Partner $partner): Response
    {
        $this->isSuperAdmin();
        if($this->isCsrfTokenValid('delete'.$partner->getId(), $request->request->get('_token'))) {
            $this->partnerRepository->remove($partner);
        }
        return $this->redirectToRoute('dashboard_partners_index', [], Response::HTTP_SEE_OTHER);
    }
}
