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
use Symfony\Component\HttpFoundation\JsonResponse;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;


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
    public function indexFront(RestaurantRepository $restaurantRepository, PaginatorInterface $paginator, Request $request): Response
    {    $restaurants = $restaurantRepository->findAll(); 
        $restaurants = $paginator->paginate($restaurants, $request->query->getInt('page', 1), 3);

        return $this->render('restaurant/indexfront.html.twig', [
            'restaurants' => $restaurants
        ]);
    }

    
   

    #[Route('/restaurant/new', name: 'app_restaurant_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, MailerInterface $mailer): Response
    {
        $restaurant = new Restaurant();
        $form = $this->createForm(RestaurantType::class, $restaurant);
        //$plats = $platRepository->findAll();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            

            // Mettre à jour les attributs de l'entité Restaurant avec les objets DateTime
            
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
                foreach ($restaurant->getplats() as $plat) {
                    $plat->addRestaurant($restaurant);
                    $entityManager->persist($plat);
                }
            }
           // $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($restaurant);
            $entityManager->flush();
            $email = (new Email())
        ->from('ahmed.neji@esprit.tn')
        ->To('ahmed.neji@esprit.tn')
        ->subject('ajout restaurant')
        ->text("un nouveau restaurant a ete ajouté");
        $mailer->send($email);

            return $this->redirectToRoute('app_restaurant_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('restaurant/new.html.twig', [
            'restaurant' => $restaurant,
           // 'plat' => $plat,
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

    #[Route('/show_in_map/{id}', name: 'app_restaurant_map', methods: ['GET'])]
    public function Map( Restaurant $id,EntityManagerInterface $entityManager ): Response
    {

        $id = $entityManager
            ->getRepository(Restaurant::class)->findBy( 
                ['id'=>$id ]
            );
        return $this->render('restaurant/api_arcgis.html.twig', [
            'restaurants' => $id,
        ]);
    }

    #[Route('/change-language', name: 'change_language')]
    public function changeLanguage(Request $request): Response
    {
        $language = $request->request->get('language');

        // Store the selected language in the session or cookie
        $request->getSession()->set('_locale', $language);

        // Redirect back to the same page or any desired page
        return $this->redirectToRoute('app_restaurant_index');
    }

    // Ajouter une méthode pour ajouter le restaurant aux favoris

    // Ajouter une méthode pour ajouter le restaurant aux favoris
#[Route('/add-to-favorites/{id}', name: 'add_to_favorites')]
public function addToFavorites(Request $request, Restaurant $restaurant): Response
{
    // Marquer le restaurant comme favori dans la base de données
    $restaurant->setFavoris(true);
    $this->getDoctrine()->getManager()->flush();

    return new JsonResponse(['success' => true]);
}

#[Route('/remove-from-favorites/{id}', name: 'remove-from_favorites')]
public function RemoveFromFavorites(Request $request, Restaurant $restaurant): Response
{
    // Marquer le restaurant comme favori dans la base de données
    $restaurant->setFavoris(false);
    $this->getDoctrine()->getManager()->flush();

    return new JsonResponse(['success' => true]);
}

// Ajouter une méthode pour afficher les restaurants favoris
#[Route('/favorites', name: 'favorites')]
public function favorites(Request $request): Response
{
    // Rediriger l'utilisateur vers la page favoris.html.twig
    return new RedirectResponse($this->generateUrl('favoris_page'));
}

#[Route('/restaurantfrontfavoris', name: 'app_restaurant_favoris')]
    public function indexFrontfavoris(RestaurantRepository $restaurantRepository, Request $request): Response
    {    $restaurants = $restaurantRepository->findAll(); 
       

        return $this->render('restaurant/favoris.html.twig', [
            'restaurants' => $restaurants
        ]);
    }



   

 
    

   

 

    




}
