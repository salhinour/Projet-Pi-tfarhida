<?php

namespace App\Controller;

use App\Entity\Activitee;
use App\Form\Activitee1Type;
use App\Repository\ActiviteeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;


#[Route('/activitee/back')]
class ActiviteeBackController extends AbstractController
{
    #[Route('/', name: 'app_activitee_back_index', methods: ['GET'])]
    public function index(ActiviteeRepository $activiteeRepository): Response
    {
        return $this->render('activitee_back/index.html.twig', [
            'activitees' => $activiteeRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_activitee_back_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager,ParameterBagInterface $parameterBag): Response
    {
        $activitee = new Activitee();
        $form = $this->createForm(Activitee1Type::class, $activitee);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // Vérifiez si le champ image est présent dans le formulaire soumis
            if ($form->has('image')) {
                $file = $form['image']->getData();
                if ($file) {
                    $uploadsDirectory = $parameterBag->get('uploads_directory');
                    $filename = md5(uniqid()) . '.' . $file->guessExtension();
                    $file->move($uploadsDirectory, $filename);
                    $activitee->setImage($filename);
                }
            }
            
            // Accéder à la valeur du champ type_categorie depuis la requête
            
            // Faites ce que vous devez faire avec la valeur de type_categorie
            
            $entityManager->persist($activitee);
            $entityManager->flush();
    
            return $this->redirectToRoute('app_activitee_back_index', [], Response::HTTP_SEE_OTHER);
        }
        

        return $this->renderForm('activitee_back/new.html.twig', [
            'activitee' => $activitee,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_activitee_back_show', methods: ['GET'])]
    public function show(Activitee $activitee): Response
    {
        return $this->render('activitee_back/show.html.twig', [
            'activitee' => $activitee,
        ]);
    }
    #[Route('/{id}/modifier-etat', name: 'app_modifier_etat_activite')]
    public function modifierEtatActivite($id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $activitee = $entityManager->getRepository(Activitee::class)->find($id);
    
        if (!$activitee) {
            throw $this->createNotFoundException('Le activitee avec l\'ID ' . $id . ' n\'existe pas');
        }
    
        // Modifier l'état du activitee selon la logique de votre application
        $activitee->setEtat(1); // Remplacez 'nouvel_etat' par le nouvel état souhaité
    
        // Enregistrer les modifications
        $entityManager->flush();
    
        // Rediriger ou retourner une réponse appropriée
        return $this->redirectToRoute('app_activitee_back_index', ['id' => $id]);
    }
    #[Route('/{id}/refuser-etat', name: 'app_refuser_etat_activite')]
    public function refuserEtatLogement($id, EntityManagerInterface $entityManager): Response
    {
        // Récupérer le logement à partir de l'ID
        $activitee = $entityManager->getRepository(Activitee::class)->find($id);

        if (!$activitee) {
            throw $this->createNotFoundException('Activite non trouvé avec l\'identifiant: '.$id);
        }

        // Mettre à jour l'état du logement (par exemple, changer un champ "état" dans votre entité Logement)
        $activitee->setEtat(0); // Supposons que vous avez un champ "état" dans votre entité Logement

        // Enregistrer les modifications dans la base de données
        $entityManager->flush();

        // Rediriger ou retourner une réponse appropriée
        return $this->redirectToRoute('app_activitee_back_index'); // Redirige vers la liste des logements par exemple
    }
    #[Route('/{id}/edit', name: 'app_activitee_back_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Activitee $activitee, EntityManagerInterface $entityManager,ParameterBagInterface $parameterBag): Response
    {
        $form = $this->createForm(Activitee1Type::class, $activitee);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // Vérifiez si le champ image est présent dans le formulaire soumis
            if ($form->has('image')) {
                $file = $form['image']->getData();
                if ($file) {
                    $uploadsDirectory = $parameterBag->get('uploads_directory');
                    $filename = md5(uniqid()) . '.' . $file->guessExtension();
                    $file->move($uploadsDirectory, $filename);
                    $activitee->setImage($filename);
                }
            }
            
            // Accéder à la valeur du champ type_categorie depuis la requête
            
            // Faites ce que vous devez faire avec la valeur de type_categorie
            
            $entityManager->persist($activitee);
            $entityManager->flush();
    
            return $this->redirectToRoute('app_activitee_back_index', [], Response::HTTP_SEE_OTHER);
        }
       

        return $this->renderForm('activitee_back/edit.html.twig', [
            'activitee' => $activitee,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_activitee_back_delete', methods: ['POST'])]
    public function delete(Request $request, Activitee $activitee, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$activitee->getId(), $request->request->get('_token'))) {
            $entityManager->remove($activitee);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_activitee_back_index', [], Response::HTTP_SEE_OTHER);
    }
}
