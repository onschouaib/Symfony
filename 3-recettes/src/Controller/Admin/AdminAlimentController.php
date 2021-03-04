<?php

namespace App\Controller\Admin;

use App\Entity\Aliment;
use App\Form\AlimentType;
use App\Repository\AlimentRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminAlimentController extends AbstractController
{
    #[Route('/admin/aliment', name: 'admin_aliment')]
    public function index(AlimentRepository $repository): Response
    {
        $aliments = $repository->findAll();
        return $this->render('admin/admin_aliment/adminAliment.html.twig', [
            'aliments' => $aliments,
        ]);
    }

    #[Route('/admin/aliment/{id}', name: 'admin_aliment_modification')]
    public function modification(Aliment $aliment)
    {
        $form = $this->createForm(AlimentType::class, $aliment);
        return $this->render('admin/admin_aliment/modificationAliment.html.twig', [
            'aliments' => $aliment,
            'form' => $form->createView()
        ]);
    }
}
