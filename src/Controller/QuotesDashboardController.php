<?php

namespace App\Controller;

use App\Entity\Quotes;
use App\Form\QuotesType;
use App\Repository\QuotesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("admin/quotes/dashboard")
 */
class QuotesDashboardController extends AbstractController
{
    /**
     * @Route("/", name="quotes_dashboard_index", methods={"GET"})
     */
    public function index(QuotesRepository $quotesRepository): Response
    {
        return $this->render('quotes_dashboard/index.html.twig', [
            'quotes' => $quotesRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="quotes_dashboard_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $quote = new Quotes();
        $form = $this->createForm(QuotesType::class, $quote);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($quote);
            $entityManager->flush();

            return $this->redirectToRoute('quotes_dashboard_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('quotes_dashboard/new.html.twig', [
            'quote' => $quote,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="quotes_dashboard_show", methods={"GET"})
     */
    public function show(Quotes $quote): Response
    {
        return $this->render('quotes_dashboard/show.html.twig', [
            'quote' => $quote,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="quotes_dashboard_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Quotes $quote, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(QuotesType::class, $quote);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('quotes_dashboard_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('quotes_dashboard/edit.html.twig', [
            'quote' => $quote,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="quotes_dashboard_delete", methods={"POST"})
     */
    public function delete(Request $request, Quotes $quote, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$quote->getId(), $request->request->get('_token'))) {
            $entityManager->remove($quote);
            $entityManager->flush();
        }

        return $this->redirectToRoute('quotes_dashboard_index', [], Response::HTTP_SEE_OTHER);
    }
}
