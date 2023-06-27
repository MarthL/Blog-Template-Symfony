<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Article;
use Symfony\Component\String\Slugger\AsciiSlugger;
use Faker\Factory;

class ArticleFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // On boucle 20x pour créer 20 colonnes 
        for($i = 0; $i < 20; $i++)
        {
        // Création des articles
        $faker = Factory::create('fr_FR');
        $slugger = new AsciiSlugger();

            for($i = 0; $i < 20; $i++)
            {
                // attribution des setters pour chaque objet 
                $title = $faker->sentence(5, true);

                $article = (new Article())
                ->setTitle($title)
                ->setContent($faker->text(500))
                ->setDate($faker->dateTime())
                ->setImage("https://picsum.photos/200/300?random=" . $i)
                ->setUrl("/".$i)
                ->setSlug(strtolower($slugger->slug($title)))
                ->setCategory($faker->words(5, true));

                // On persiste l'objet
                $manager->persist($article);
            }
                
            // On déclenche l'enregistrement en BDD
            $manager->flush();
        }
    }
}