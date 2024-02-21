<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Entity\Reponse;
use App\Form\Reclamation1Type;
use App\Form\Reponse1Type;
use App\Repository\ReclamationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/reclamation/back')]
class ReclamationBackController extends AbstractController
{
    #[Route('/', name: 'app_reclamation_back_index', methods: ['GET'])]
    public function index(ReclamationRepository $reclamationRepository): Response
    {
        return $this->render('reclamation_back/index.html.twig', [
            'reclamations' => $reclamationRepository->findAll(),
        ]);
    }

    #[Route('/{id}/repondre', name: 'app_reclamation_back_repondre', methods: ['GET', 'POST'])]
public function repondre(Request $request, Reclamation $reclamation, EntityManagerInterface $entityManager): Response
{
    $reponse = new Reponse();

    $form = $this->createForm(Reponse1Type::class, $reponse);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        // Associer la réponse à la réclamation
        $reclamation->setReponse($reponse);

        // Changer l'état de la réclamation à "traité"
        $reclamation->setEtat(true);

        $entityManager->persist($reponse);
        $entityManager->flush();

        return $this->redirectToRoute('app_reclamation_back_index', ['id' => $reclamation->getId()]);
    }

    return $this->renderForm('reponse_back/new.html.twig', [
        'reponse' => $reponse,
        'form' => $form,
    ]);
}

#[Route('/{id}/show_response', name: 'app_reclamation_back_show_response', methods: ['GET'])]
    public function showResponse(Reclamation $reclamation): Response
    {
        // Vous devez récupérer la réponse associée à cette réclamation
        $reponse = $reclamation->getReponse();

        // Vous devez créer le template Twig pour afficher la réponse
        return $this->render('reponse_back/show.html.twig', [
            'reclamation' => $reclamation,
            'reponse' => $reponse,
        ]);
    }
    #[Route('/new', name: 'app_reclamation_back_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $reclamation = new Reclamation();
        $form = $this->createForm(Reclamation1Type::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($reclamation);
            $entityManager->flush();

            return $this->redirectToRoute('app_reclamation_back_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reclamation_back/new.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_reclamation_back_show', methods: ['GET'])]
    public function show(Reclamation $reclamation): Response
    {
        return $this->render('reclamation_back/show.html.twig', [
            'reclamation' => $reclamation,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_reclamation_back_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Reclamation $reclamation, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(Reclamation1Type::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_reclamation_back_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reclamation_back/edit.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_reclamation_back_delete', methods: ['POST'])]
    public function delete(Request $request, Reclamation $reclamation, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reclamation->getId(), $request->request->get('_token'))) {
            $entityManager->remove($reclamation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_reclamation_back_index', [], Response::HTTP_SEE_OTHER);
    }
}
