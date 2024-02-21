<?php

namespace App\Controller;

use App\Entity\Plat;
use App\Form\PlatType;
use App\Repository\PlatRepository;
use App\Repository\RestaurantRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

#[Route('/plat')]
class PlatController extends AbstractController
{
    #[Route('/', name: 'app_plat_index', methods: ['GET'])]
    public function index(PlatRepository $platRepository): Response
    {
        return $this->render('plat/index.html.twig', [
            'plats' => $platRepository->findAll(),
        ]);
    }

    #[Route('/platfront', name: 'app_plat_indexfront')]
    public function indexFront(PlatRepository $platRepository): Response
    {
        return $this->render('plat/indexfront.html.twig', [
            'plats' => $platRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_plat_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, RestaurantRepository $restaurantRepository): Response
    {
        $plat = new Plat();
        $form = $this->createForm(PlatType::class, $plat);
        $restaurants = $restaurantRepository->findAll();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('imagePlat')->getData();
            if ($imageFile) {
                $oldFilename = $plat->getImagePlat();
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

                $plat->setImagePlat($newFilename);
                foreach ($plat->getRestaurants() as $restaurant) {
                    $restaurant->addPlat($plat);
                    $entityManager->persist($restaurant);
                }
    
            }
            $entityManager->persist($plat);
            $entityManager->flush();

            return $this->redirectToRoute('app_plat_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('plat/new.html.twig', [
            'plat' => $plat,
            'restaurants' => $restaurants,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_plat_show', methods: ['GET'])]
    public function show(Plat $plat): Response
    {
        return $this->render('plat/show.html.twig', [
            'plat' => $plat,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_plat_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Plat $plat, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(PlatType::class, $plat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Gérer le téléchargement de l'image si un nouveau fichier est téléchargé
        $imageFile = $form->get('imagePlat')->getData();
        if ($imageFile) {
            $newFilename = uniqid().'.'.$imageFile->guessExtension();

            try {
                $imageFile->move(
                    $this->getParameter('images_directory'),
                    $newFilename
                );
            } catch (FileException $e) {
                // Gérer les erreurs de téléchargement ici
            }

            // Mettre à jour le chemin de l'image
            $plat->setImagePlat($newFilename);
        }

        // Pas besoin de persist() car $restaurant est déjà géré par Doctrine
            $entityManager->flush();

            return $this->redirectToRoute('app_plat_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('plat/edit.html.twig', [
            'plat' => $plat,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_plat_delete', methods: ['POST'])]
    public function delete(Request $request, Plat $plat, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$plat->getId(), $request->request->get('_token'))) {
            $entityManager->remove($plat);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_plat_index', [], Response::HTTP_SEE_OTHER);
    }
}
