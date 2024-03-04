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
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Twilio\Rest\Client;
use Knp\Component\Pager\PaginatorInterface;

#[Route('/reclamation/back')]
class ReclamationBackController extends AbstractController
{
    #[Route('/', name: 'app_reclamation_back_index', methods: ['GET','POST'])]
    public function index(ReclamationRepository $reclamationRepository,PaginatorInterface $paginator,EntityManagerInterface $entityManager,Request $request): Response
    {   
        $typeStatistics = $entityManager->createQueryBuilder()
        ->select('p.type, COUNT(p.id) as typeCount')
        ->from('App\Entity\Reclamation', 'p')
        ->groupBy('p.type')
        ->getQuery()
        ->getResult();
        $reclamations = $entityManager
        ->getRepository(Reclamation::class)
        ->findAll();

        /////////
        // $back = null;
        
        // if($request->isMethod("POST")){
        //     if ( $request->request->get('optionsRadios')){
        //         $SortKey = $request->request->get('optionsRadios');
        //         switch ($SortKey){
        //             case 'titre':
        //                 $reclamations = $reclamationRepository->SortByTitre();
        //                 break;
        //             case 'type':
        //                 $reclamations = $reclamationRepository->SortByTypeDeReclamation();
        //                 break;
        //             case 'description_reclamation':
        //                 $reclamations = $reclamationRepository->SortByDescriptionReclamation();
        //                 break;

        //             case 'date':
        //                 $reclamations = $reclamationRepository->SortByDate();
        //                 break;


        //         }
        //     }
        //     if ( $reclamations){
        //         $back = "success";
        //     }else{
        //         $back = "failure";
        //     }
        //     }
        $reclamationsQuery = $reclamationRepository->createQueryBuilder('r')
        ->orderBy('r.date', 'DESC')
        ->getQuery();

    
        $pagination = $paginator->paginate(
            $reclamationsQuery, 
            $request->query->getInt('page', 1), 
            5
        );
        return $this->render('reclamation_back/index.html.twig', [
            'reclamations' => $reclamations,
            // 'back' => $back,
            'pagination' => $pagination,
            'typeStatistics'=>$typeStatistics
        ]);
    }

    #[Route('/{id}/repondre', name: 'app_reclamation_back_repondre', methods: ['GET', 'POST'])]
public function repondre(Request $request, Reclamation $reclamation, EntityManagerInterface $entityManager,  MailerInterface $mailer): Response
{
    $reponse = new Reponse();

    $form = $this->createForm(Reponse1Type::class, $reponse);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $accountSid = 'ACe1066284a1c153e92f884d183dec7869';
            $authToken = 'c86cf0b4ecfe7c4685f7dbcbf59d7528';
            $client = new Client($accountSid, $authToken);
    
            $message = $client->messages->create(
                '+21696638088', // replace with admin's phone number
                [
                    'from' => '+15098222653', // replace with your Twilio phone number
                    'body' => 'vous avez reçu une reponse a votre reclamation'
                ]
            );
        // Associer la réponse à la réclamation
        $reclamation->setReponse($reponse);

        // Changer l'état de la réclamation à "traité"
        $reclamation->setEtat(true);

        $entityManager->persist($reponse);
        $entityManager->flush();

        $email = (new Email())
        ->from('tayssir.sboui@esprit.tn')
        ->To('tayssir.sboui@esprit.tn')
        ->subject('reponse reclamation')
        ->text("vous avez reçu une reponse a votre reclamation");
        $mailer->send($email);
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
