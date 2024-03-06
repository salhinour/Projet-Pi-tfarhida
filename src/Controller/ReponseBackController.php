<?php

namespace App\Controller;

use App\Entity\Reponse;
use App\Entity\Reclamation;
use App\Form\Reponse1Type;
use App\Repository\ReponseRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Twilio\Rest\Client;

#[Route('/reponse/back')]
class ReponseBackController extends AbstractController
{
    #[Route('/', name: 'app_reponse_back_index', methods: ['GET'])]
    public function index(ReponseRepository $reponseRepository): Response
    {
        return $this->render('reponse_back/index.html.twig', [
            'reponses' => $reponseRepository->findAll(),
        ]);
    }

    
   #[Route('/new', name: 'app_reponse_back_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $reponse = new Reponse();
        $form = $this->createForm(Reponse1Type::class, $reponse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($reponse);
            $entityManager->flush();

            return $this->redirectToRoute('app_reponse_back_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reponse_back/new.html.twig', [
            'reponse' => $reponse,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_reponse_back_show', methods: ['GET'])]
    public function show(Reponse $reponse): Response
    {
        return $this->render('reponse_back/show.html.twig', [
            'reponse' => $reponse,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_reponse_back_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Reponse $reponse, EntityManagerInterface $entityManager, MailerInterface $mailer): Response
    {
        $form = $this->createForm(Reponse1Type::class, $reponse);
        $form->handleRequest($request);
        $user = $this->getUser();
        
        $tel=strval($user->getNumero());
        if ($form->isSubmitted() && $form->isValid()) {
            // $accountSid = 'ACe1066284a1c153e92f884d183dec7869';
            // $authToken = 'fe3ad2db716b74b165a64a0be07e590c';
            $accountSid = 'ACb0d367046da4463fd88b43989996bc8d';
            $authToken = '6d0a3d7e12b11d0f413fb748361e00b0';
            $client = new Client($accountSid, $authToken);
    
            $message = $client->messages->create(
                '+216'.$tel, // replace with admin's phone number
                [
                    'from' => '+19725841982', // replace with your Twilio phone number
                    'body' => 'Une modification  a été faite sur la réponse que vous avez reçu '
                ]
            );
            $entityManager->flush();
            $email = (new Email())
            ->from('tayssir.sboui@esprit.tn')
            ->To('tayssir.sboui@esprit.tn')
            ->subject('Renouvellement')
            ->text("Une modification  a été faite sur la réponse que vous avez reçu");
            $mailer->send($email);

            return $this->redirectToRoute('app_reponse_back_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reponse_back/edit.html.twig', [
            'reponse' => $reponse,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_reponse_back_delete', methods: ['POST'])]
    public function delete(Request $request, Reponse $reponse, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reponse->getId(), $request->request->get('_token'))) {
            $entityManager->remove($reponse);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_reponse_back_index', [], Response::HTTP_SEE_OTHER);
    }
}
