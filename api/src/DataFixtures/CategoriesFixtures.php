<?php

namespace App\DataFixtures;

use App\Entity\Categorie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\ORM\EntityManagerInterface;


class CategoriesFixtures extends Fixture
{
    private $categories = array(
        'Gratin' => 'categories/gratin.jpg', 
        'Poisson' => 'categories/poisson.jpg', 
        'Végétarien' => 'categories/vegetarien.jpg', 
        'Oeufs' => 'categories/oeuf.jpg', 
        'Cuisine du monde' => 'categories/monde.jpg', 
        'Sandwich' => 'categories/sandwich.jpg', 
        'Quiche' => 'categories/quiche.jpg', 
        'Pâtes' => 'categories/pates.jpg', 
        'Cuisine du terroir' => 'categories/tradition.jpg', 
   
    );
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }


    public function load(ObjectManager $manager): void
    {
        $basePath = $_ENV['API'];
        $this->truncate();


        foreach ($this->categories as $nom => $illustration) {
            $categorie = new Categorie();
            $categorie->setNom($nom) ;
            $categorie->setIllustration( $basePath.$illustration);
            $manager->persist($categorie);
        }
        $manager->flush();
    }

    private function truncate()
    {
        $connection =$this->entityManager->getConnection();
        $connection->exec("ALTER TABLE categorie AUTO_INCREMENT = 1;");
    }
}
