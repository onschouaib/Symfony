<?php

namespace App\DataFixtures;

use App\Entity\Aliment;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $manager->flush();

        $a1 = new Aliment();
        $a1 ->setNom("carotes")
            ->setPrix(1.80)
            ->setCalorie(36)
            ->setImage("legumes/carotte.png")
            ->setProteine(0.77)
            ->setGlucide(6.45)
            ->setLipide(0.26)        ;
        $manager->persist($a1);

        $a2 = new Aliment();
        $a2 ->setNom("Patate")
            ->setPrix(1.50)
            ->setCalorie(80)
            ->setImage("legumes/patate.jpg")
            ->setProteine(1.80)
            ->setGlucide(16.7)
            ->setLipide(0.34)        ;
        $manager->persist($a2);

        $a3 = new Aliment();
        $a3 ->setNom("Tomate")
            ->setPrix(2.30)
            ->setCalorie(18)
            ->setImage("legumes/tomate.png")
            ->setProteine(0.86)
            ->setGlucide(2.26)
            ->setLipide(0.24)        ;
        $manager->persist($a3);

        $a1 = new Aliment();
        $a1 ->setNom("pomme")
            ->setPrix(2.35)
            ->setCalorie(52)
            ->setImage("legumes/pomme.png")
            ->setProteine(0.25)
            ->setGlucide(11.6)
            ->setLipide(0.25)
        ;
        $manager->persist($a1);

        $manager->flush();
    }

    
    
        
}
