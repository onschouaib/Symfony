<?php

namespace App\Controller;

use App\Entity\Animal;
use App\Entity\Famille;
use App\Repository\AnimalRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AnimalController extends AbstractController
{
    #[Route('/', name: 'animal')]
    public function index(AnimalRepository $repository): Response
    {
        
        $animaux = $repository->findAll();
        return $this->render('animal/index.html.twig',[
            "animaux" => $animaux
        ]);
        
    }

    #[Route('/animal/{id}', name: 'afficher_animal')]
    public function afficherAnimal(Animal $animal): Response
    {        
        return $this->render('animal/animal.html.twig', [
            "animal"=>$animal
        ]);
        
    }

    
}