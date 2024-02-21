<?php

namespace App\Controller;

use App\Entity\Restaurant;
use App\Form\RestaurantType;
use App\Repository\RestaurantRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\Exception\FileException;


class RestaurantController extends AbstractController
{   
    
    #[Route('/restaurant')]
    public function index(RestaurantRepository $restaurantRepository): Response
    {
        return $this->render('restaurant/index.html.twig', [
            'restaurants' => $restaurantRepository->findAll(),
        ]);
    }

    #[Route('/restaurantfront', name: 'app_restaurant_indexfront')]
    public function indexFront(RestaurantRepository $restaurantRepository): Response
    {
        return $this->render('restaurant/indexfront.html.twig', [
            'restaurants' => $restaurantRepository->findAll(),
        ]);
    }

    
   

    #[Route('/restaurant/new', name: 'app_restaurant_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $restaurant = new Restaurant();
        $form = $this->createForm(RestaurantType::class, $restaurant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Gérer le téléchargement de l'image
            $imageFile = $form->get('imageRestaurant')->getData();
            if ($imageFile) {
                $oldFilename = $restaurant->getImageRestaurant();
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

                $restaurant->setImageRestaurant($newFilename);
            }

            $entityManager->persist($restaurant);
            $entityManager->flush();

            return $this->redirectToRoute('app_restaurant_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('restaurant/new.html.twig', [
            'restaurant' => $restaurant,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/restaurant/{id}', name: 'app_restaurant_show', methods: ['GET'])]
    public function show(Restaurant $restaurant): Response
    {
        $plats = $restaurant->getPlats();
        return $this->render('restaurant/show.html.twig', [
            'restaurant' => $restaurant,
            'plats' => $plats,
        ]);
    }

    #[Route('/restaurantfront/{id}', name: 'app_restaurant_showfront', methods: ['GET'])]
    public function showfront(Restaurant $restaurant): Response
    {
        $plats = $restaurant->getPlats();
        return $this->render('restaurant/showfront.html.twig', [
            'restaurant' => $restaurant,
            'plats' => $plats,
        ]);
    }

    #[Route('/restaurant/{id}/edit', name: 'app_restaurant_edit', methods: ['GET', 'POST'])]
public function edit(Request $request, Restaurant $restaurant, EntityManagerInterface $entityManager): Response
{
    $form = $this->createForm(RestaurantType::class, $restaurant);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        // Gérer le téléchargement de l'image si un nouveau fichier est téléchargé
        $imageFile = $form->get('imageRestaurant')->getData();
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
            $restaurant->setImageRestaurant($newFilename);
        }

        // Pas besoin de persist() car $restaurant est déjà géré par Doctrine
        $entityManager->flush();

        return $this->redirectToRoute('app_restaurant_index', [], Response::HTTP_SEE_OTHER);
    }

    return $this->render('restaurant/edit.html.twig', [
        'restaurant' => $restaurant,
        'form' => $form->createView(),
    ]);
}

    #[Route('/restaurant/{id}', name: 'app_restaurant_delete', methods: ['POST'])]
    public function delete(Request $request, Restaurant $restaurant, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$restaurant->getId(), $request->request->get('_token'))) {
            $entityManager->remove($restaurant);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_restaurant_index', [], Response::HTTP_SEE_OTHER);
    }

   
   
   
}
