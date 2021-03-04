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
            'isCalorie' => false,
            'isGlucide' => false
        ]);
    }

    #[Route('/aliments/calorie/{calorie}', name: 'alimentParCalorie')]
    public function alimentParCalorie(AlimentRepository $repo, $calorie): Response
    {
        $aliments = $repo->getAlimentParNbCalories($calorie);
        return $this->render('aliment/aliments.html.twig', [
            'aliments' => $aliments,
            'isCalorie' => true,
            'isGlucide' => false            
        ]);
    }

    #[Route('/aliments/glucide/{glucide}', name: 'alimentParGlucide')]
    public function alimentParGlucide(AlimentRepository $repo, $glucide): Response
    {
        $aliments = $repo->getAlimentParGlucide('glucide', '<', $glucide);
        return $this->render('aliment/aliments.html.twig', [
            'aliments' => $aliments,
            'isCalorie' => false,
            'isGlucide' => true
            
        ]);
    }

    
}
