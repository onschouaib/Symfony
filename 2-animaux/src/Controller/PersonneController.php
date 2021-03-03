<?php

namespace App\Controller;

use App\Entity\Personne;
use App\Repository\PersonneRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PersonneController extends AbstractController
{
    #[Route('/personnes', name: 'personnes')]
    public function index(PersonneRepository $personnesRep): Response
    {
        $personnes = $personnesRep->findAll();
        return $this->render('personne/personnes.html.twig', [
            "personnes" => $personnes
        ]);
    }

    #[Route('/personne/{id}', name: 'afficherPersonne')]
    public function afficherPersonne(Personne $personne): Response
    {        
        return $this->render('personne/personne.html.twig', [
            "personne" => $personne
        ]);
    }
}
