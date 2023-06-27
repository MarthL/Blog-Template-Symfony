<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\User;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // create one user for example
        $user = new User();
        $user->setUsername('johnDoe');
        $user->setPassword('password');
        $manager->persist($user);

        $manager->flush();
    }
}
