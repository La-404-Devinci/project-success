<?php

namespace App\Controller\Admin;

use App\Entity\Partner;
use App\Form\PartnerType;
use App\Repository\PartnerRepository;
use App\Services\UploadFileHelper;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/partners')]
class AdminPartnerController extends AbstractController
{
    #[Route('/', name: 'dashboard_partners_index')]
    public function index(PartnerRepository $partnerRepository): Response
    {
        $partners = $partnerRepository->findAll();

        return $this->render('admin/partners/index.html.twig', [
            'partners' => $partners,
        ]);
    }

    #[Route('/create', name: 'dashboard_partners_create')]
    public function create(Request $request, EntityManagerInterface $manager, UploadFileHelper $uploadFileHelper): Response
    {
        $partner = new Partner();
        $form = $this->createForm(PartnerType::class, $partner);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $partner->setImage($uploadFileHelper->upload($form->get('image')->getData()));
            $manager->persist($partner);
            $manager->flush();
            return $this->redirectToRoute('dashboard_partners_index');
        }

        return $this->renderForm('admin/partners/create.html.twig', [
            'partner' => $partner,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/delete', name: 'dashboard_partners_delete')]
    public function delete(PartnerRepository $partnerRepository): Response
    {
        $partners = $partnerRepository->findAll();

        return $this->render('admin/partners/index.html.twig', [
            'partners' => $partners,
        ]);
    }
}
