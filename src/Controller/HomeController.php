<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ArticleRepository;
use App\Entity\ArticleArticle;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(ArticleRepository $articleRepository): Response
    {

        $articles = $articleRepository->findBy(
            array(),
            array('id' => 'DESC'),
            6,
            0
        );


        return $this->render('home/index.html.twig', [
            'articles' => $articles
        ]);
    }
}
