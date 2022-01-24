<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use App\Entity\User;

class RegisterController extends AbstractController
{
    /**
     * @Route("/register", name="register")
     */
    public function index(UserPasswordHasherInterface $passwordHasher)
    {
        $user = (new User())
        ->setUsername('johndoe');

        ;
        $plaintextPassword = 'test' ;

        // hash the password (based on the security.yaml config for the $user class)
        $hashedPassword = $passwordHasher->hashPassword(
            $user,
            $plaintextPassword
        );
        $user->setPassword($hashedPassword);
        

        dd($user, $hashedPassword, $plaintextPassword);
    }
}
