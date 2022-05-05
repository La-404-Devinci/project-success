<?php

namespace App\Controller;

use App\Entity\News;
use App\Entity\User;
use App\Form\NewsType;
use App\Repository\NewsRepository;
use App\Repository\UserRepository;
use App\Services\UploadFileHelper;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin')]
class AdminController extends AbstractController
{
    #[Route('/', name: 'dashboard')]
    public function index(): Response
    {
        if($this->isGranted('ROLE_ADMIN')) {
            return $this->redirectToRoute('dashboard_news_index');
        }
        else {
            return $this->redirectToRoute('home');
        }
    }
}
