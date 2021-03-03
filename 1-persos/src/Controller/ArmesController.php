<?php

namespace App\Controller;
use App\Entity\Arme;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArmesController extends AbstractController
{
    #[Route('/', name: 'armes')]
    public function index(): Response
    {   
        return $this->render('armes/index.html.twig', [
            'controller_name' => 'ArmesController',
        ]);
    }

    #[Route('/armes', name: 'armes')]
    public function armes()
     {
         echo "HI1";
         
        Arme::creerArme();

        $test = Arme::$armes;
        //  var_dump($test);
        return $this->render('armes/armes.html.twig', [
            "armes" => Arme::$armes            
        ]);
     }
     #[Route('/armes/{nom}', name: 'afficher_arme')]
     public function afficherArme($nom)
    {
        Arme::creerArme();
        $arme = Arme::getArmeParNom($nom);
        return $this->render('armes/arme.html.twig', [
            'arme' => $arme         
        ]);
    }
}
