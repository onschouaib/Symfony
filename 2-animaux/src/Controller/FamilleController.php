<?php

namespace App\Controller;

use App\Entity\Famille;
use App\Repository\AnimalRepository;
use App\Repository\FamilleRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FamilleController extends AbstractController
{
    #[Route('/famille', name: 'famille')]
    public function index(FamilleRepository $familleRep, AnimalRepository $animalRep): Response
    {
        $famille = $familleRep->findAll();
        $animal = $animalRep->findAll();
        return $this->render('famille/familles.html.twig', [
            "famille" => $famille,
            "animal" => $animal
        ]);
    }
    #[Route('/famille/{id}', name: 'afficher_famille')]
    public function afficherFamille(Famille $famille): Response
    {        
        return $this->render('animal/famille.html.twig', [
            "famille"=>$famille
        ]);
        
    }
}
