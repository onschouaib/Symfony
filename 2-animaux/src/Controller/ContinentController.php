<?php

namespace App\Controller;

use App\Entity\Continent;
use Doctrine\ORM\Mapping\Id;
use App\Repository\ContinentRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContinentController extends AbstractController
{
    #[Route('/continents', name: 'continents')]
    public function index(ContinentRepository $continentsRep): Response
    {
        $continent = $continentsRep->findAll();
        return $this->render('continent/continents.html.twig', [
            'continents' => $continent
        ]);
    }

    #[Route('/continent/{id}', name: 'continent')]
    public function afficherContinent(Continent $continent): Response
    {
        return $this->render('continent/continent.html.twig', [            
            "continent" => $continent
        ]);
    }
}
