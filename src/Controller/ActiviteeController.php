<?php

namespace App\Controller;

use App\Entity\Activitee;
use App\Form\ActiviteeType;
use App\Repository\ActiviteeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ActiviteeController extends AbstractController
{
    #[Route('/activite', name: 'app_activitee_index', methods: ['GET'])]
    public function index(ActiviteeRepository $activiteeRepository): Response
    {
        return $this->render('activitee/index.html.twig', [
            'activitees' => $activiteeRepository->findAll(),
        ]);
    }
    #[Route('/act', name: 'app_activitee_indexx', methods: ['GET'])]
    public function indexx(ActiviteeRepository $activiteeRepository): Response
    {
        return $this->render('activitee/activite.html.twig', [
            'activitees' => $activiteeRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_activitee_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $activitee = new Activitee();
        $form = $this->createForm(ActiviteeType::class, $activitee);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($activitee);
            $entityManager->flush();

            return $this->redirectToRoute('app_activitee_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('activitee/new.html.twig', [
            'activitee' => $activitee,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_activitee_show', methods: ['GET'])]
    public function show(Activitee $activitee): Response
    {
        return $this->render('activitee/show.html.twig', [
            'activitee' => $activitee,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_activitee_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Activitee $activitee, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ActiviteeType::class, $activitee);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_activitee_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('activitee/edit.html.twig', [
            'activitee' => $activitee,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_activitee_delete', methods: ['POST'])]
    public function delete(Request $request, Activitee $activitee, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$activitee->getId(), $request->request->get('_token'))) {
            $entityManager->remove($activitee);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_activitee_index', [], Response::HTTP_SEE_OTHER);
    }
}
