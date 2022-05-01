<?php

namespace App\DataFixtures;

use App\Entity\Student;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $s1 = new Student();
        $s1->setFirstName("Jack")
           ->setLastName("Socho")
           ->setNumEtud(125876);
        $manager->persist($s1);

          $s2 = new Student();
        $s2->setFirstName("Marie")
           ->setLastName("Renault")
           ->setNumEtud(98754256);
        $manager->persist($s2);

          $s3 = new Student();
        $s3->setFirstName("Jojo")
           ->setLastName("Adel")
           ->setNumEtud(7894561);
        $manager->persist($s3);

        $manager->flush();
    }
}
