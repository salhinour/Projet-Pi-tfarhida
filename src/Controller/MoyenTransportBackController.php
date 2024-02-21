<?php

namespace App\Controller;

use App\Entity\MoyenTransport;
use App\Form\MoyenTransport1Type;
use App\Repository\MoyenTransportRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

#[Route('/moyen/transport/back')]
class MoyenTransportBackController extends AbstractController
{
    #[Route('/', name: 'app_moyen_transport_back_index', methods: ['GET'])]
    public function index(MoyenTransportRepository $moyenTransportRepository): Response
    {
        return $this->render('moyen_transport_back/index.html.twig', [
            'moyen_transports' => $moyenTransportRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_moyen_transport_back_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $moyenTransport = new MoyenTransport();
        $form = $this->createForm(MoyenTransport1Type::class, $moyenTransport);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('image')->getData();
            if ($imageFile) {
                $oldFilename = $moyenTransport->getImage();
                if ($oldFilename && file_exists($this->getParameter('images_directory') . '/' . $oldFilename)) {
                    unlink($this->getParameter('images_directory') . '/' . $oldFilename);
                }
                $newFilename = uniqid().'.'.$imageFile->guessExtension();

                try {
                    $imageFile->move(
                        $this->getParameter('images_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // Gérer les erreurs de téléchargement ici
                }

                $moyenTransport->setImage($newFilename);
            }
            $entityManager->persist($moyenTransport);
            $entityManager->flush();

        
            return $this->redirectToRoute('app_moyen_transport_back_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('moyen_transport_back/new.html.twig', [
            'moyen_transport' => $moyenTransport,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_moyen_transport_back_show', methods: ['GET'])]
    public function show(MoyenTransport $moyenTransport): Response
    {
        return $this->render('moyen_transport_back/show.html.twig', [
            'moyen_transport' => $moyenTransport,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_moyen_transport_back_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, MoyenTransport $moyenTransport, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(MoyenTransport1Type::class, $moyenTransport);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('image')->getData();
            if ($imageFile) {
                $oldFilename = $moyenTransport->getImage();
                if ($oldFilename && file_exists($this->getParameter('images_directory') . '/' . $oldFilename)) {
                    unlink($this->getParameter('images_directory') . '/' . $oldFilename);
                }
                $newFilename = uniqid().'.'.$imageFile->guessExtension();

                try {
                    $imageFile->move(
                        $this->getParameter('images_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // Gérer les erreurs de téléchargement ici
                }

                $moyenTransport->setImage($newFilename);
            }
            $entityManager->flush();

            return $this->redirectToRoute('app_moyen_transport_back_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('moyen_transport_back/edit.html.twig', [
            'moyen_transport' => $moyenTransport,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_moyen_transport_back_delete', methods: ['POST'])]
    public function delete(Request $request, MoyenTransport $moyenTransport, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$moyenTransport->getId(), $request->request->get('_token'))) {
            $entityManager->remove($moyenTransport);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_moyen_transport_back_index', [], Response::HTTP_SEE_OTHER);
    }
}
