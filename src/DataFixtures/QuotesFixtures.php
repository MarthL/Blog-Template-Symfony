<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Quotes;
use Faker\Factory;

class QuotesFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        for($i = 0; $i < 20; $i++)
        { 
            $faker = Factory::create('fr_FR');
            $quote = (new Quotes())
            ->setContent($faker->text(100));
            $manager->persist($quote);
        }

        $manager->flush();
    }
}
