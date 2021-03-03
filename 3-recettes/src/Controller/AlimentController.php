<?php

namespace App\Controller;

use App\Repository\AlimentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AlimentController extends AbstractController
{    
    #[Route('/', name: 'aliments')]
    public function index(AlimentRepository $repo): Response
    {
        $aliments = $repo->findAll();
        return $this->render('aliment/aliments.html.twig', [
            'aliments' => $aliments,
        ]);
    }
}
