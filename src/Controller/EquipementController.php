<?php

namespace App\Controller;

use App\Entity\Equipement;
use App\Entity\Logement;
use App\Repository\EquipementRepository;
use App\Repository\LogementRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface; // Ajout de l'importation ParameterBagInterface
use App\Form\LogementType;
use App\Form\EquipementType;


#[Route('/equipement')]
class EquipementController extends AbstractController
{
    #[Route('/', name: 'app_equipement_index', methods: ['GET'])]
    public function index(EquipementRepository $equipementRepository): Response
    {
        return $this->render('equipement/index.html.twig', [
            'equipements' => $equipementRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_equipement_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $equipement = new Equipement();
        $form = $this->createForm(EquipementType::class, $equipement);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            // Récupérer l'ID du logement à partir des paramètres de la requête
            $logementId = $request->get('logement_id');
            // Récupérer l'entité Logement correspondant à l'ID
            $logement = $entityManager->getRepository(Logement::class)->find($logementId);
            
            // Assurez-vous que le logement existe
            if (!$logement) {
                throw $this->createNotFoundException('Le logement avec l\'ID ' . $logementId . ' n\'existe pas.');
            }
            
            // Associez l'équipement au logement
            $logement->setEquipement($equipement);
            
            $entityManager->persist($equipement);
            $entityManager->flush();
            $equipement_created = true;
            
            // Rediriger vers la page d'index de logement
            return $this->redirectToRoute('app_logement_index', [], Response::HTTP_SEE_OTHER);
        }
    
        return $this->renderForm('equipement/new.html.twig', [
            'equipement' => $equipement,
            'form' => $form,
            'equipement_created' => false,
            'action'=>'add'
        ]);
    }
    

    // #[Route('/{id}', name: 'app_equipement_show', methods: ['GET'])]
    // public function show(Equipement $equipement): Response
    // {
    //     $logement = $equipement->getLogement();

    //     return $this->render('equipement/show.html.twig', [
    //         'equipement' => $equipement,
    //         'logement' => $logement,

    //     ]);
    // }


    #[Route('/{id}/edit', name: 'app_equipement_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Equipement $equipement, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(EquipementType::class, $equipement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_equipement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('equipement/edit.html.twig', [
            'equipement' => $equipement,
            'form' => $form,
            'action'=>'edit'

        ]);
    }
    #[Route('/{id}', name: 'app_equipement_delete', methods: ['POST'])]
    public function delete(Request $request, equipement $equipement, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$equipement->getId(), $request->request->get('_token'))) {
            $entityManager->remove($equipement);
            $entityManager->flush();
        }
       
        return $this->redirectToRoute('app_reclamation_index', [], Response::HTTP_SEE_OTHER);
    }
   
    #[Route('/{equipementId}', name: 'app_equipement_show', methods: ['GET'])]
    public function showlogement(int $equipementId, EquipementRepository $equipementRepository, LogementRepository $logementRepository): Response
    {
        // Fetch equipment based on logement ID
        $logement = $logementRepository->findOneBy(['equipement' => $equipementId]);
       
        if (!$logement || !$logement->getEquipement()) {
            // Render the not_available.html.twig template if logement or equipement is not found
            return $this->render('logement/not_available.html.twig');
        }
       
        // Fetch logement based on ID
        $equipement = $logement->getEquipement();
    
        // Check if $equipement is null before accessing its id attribute
        if (!$equipement) {
            // Handle the case where $equipement is null
            // Redirect or render an error message as appropriate
        }
        
        // Render template with equipment and logement details
        return $this->render('equipement/show.html.twig', [
            'equipement' => $equipement,
            'logement' => $logement,
        ]);
    }
    

}
