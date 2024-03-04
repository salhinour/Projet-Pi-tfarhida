<?php

namespace App\Controller;

use App\Entity\MoyenTransport;
use App\Form\MoyenTransportType;
use App\Repository\MoyenTransportRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\Valid;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Twilio\Rest\Client;
use Knp\Component\Pager\PaginatorInterface;

#[Route('/moyen/transport')]
class MoyenTransportController extends AbstractController
{
    #[Route('/', name: 'app_moyen_transport_index', methods: ['GET'])]
public function index(MoyenTransportRepository $moyenTransportRepository, Request $request,PaginatorInterface $paginator,): Response
{
    $selectedType = $request->query->get('type');
    $moyen_transports = [];

    if ($selectedType) {
        $moyen_transports = $moyenTransportRepository->findBy(['type' => $selectedType]);
    } else {
        $moyen_transports = $moyenTransportRepository->findBy(['valide' => true]);
    }

    if ($request->isXmlHttpRequest()) {
        // If it's an AJAX request, render only the filtered results
        return $this->render('moyen_transport/_filtered_results.html.twig', [
            'moyen_transports' => $moyen_transports,
        ]);
    }
// Paginer les activités récupérées
$moyen_transports= $paginator->paginate($moyen_transports, $request->query->getInt('page', 1), 1);
    // If it's a regular request, render the full page
   
    return $this->render('moyen_transport/index.html.twig', [
        'moyen_transports' => $moyen_transports,
        'selectedType' => $selectedType,
    ]);
}

    #[Route('/new', name: 'app_moyen_transport_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $moyenTransport = new MoyenTransport();
        $form = $this->createForm(MoyenTransportType::class, $moyenTransport);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $accountSid = 'AC9ebe82e65c458cdd9134237ce1ea69d8';
            $authToken = '5baa5838b302ea6970fcb6fe84f81613';
            $client = new Client($accountSid, $authToken);
    
            $message = $client->messages->create(
                '+21656747798', // replace with admin's phone number
                [
                    'from' => '+16822378789', // replace with your Twilio phone number
                    'body' => 'moyen de transport bien ajouté et sous traitement :' . $moyenTransport->getType(),
                ]
            );
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

            return $this->redirectToRoute('app_activite', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('moyen_transport/new.html.twig', [
            'moyen_transport' => $moyenTransport,
            'form' => $form,
            'action' => 'add'

        ]);
    }

    #[Route('/{id}', name: 'app_moyen_transport_show', methods: ['GET'])]
    public function show(MoyenTransport $moyenTransport): Response
    {
        return $this->render('moyen_transport/show.html.twig', [
            'moyen_transport' => $moyenTransport,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_moyen_transport_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, MoyenTransport $moyenTransport, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(MoyenTransportType::class, $moyenTransport);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $entityManager->flush();

            return $this->redirectToRoute('app_moyen_transport_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('moyen_transport/edit.html.twig', [
            'moyen_transport' => $moyenTransport,
            'form' => $form,
            'edit' => 'add'

        ]);
    }

    #[Route('/{id}', name: 'app_moyen_transport_delete', methods: ['POST'])]
    public function delete(Request $request, MoyenTransport $moyenTransport, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$moyenTransport->getId(), $request->request->get('_token'))) {
            $entityManager->remove($moyenTransport);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_moyen_transport_index', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('/{id}/trajects', name: 'app_trajects_for_moyen_transport', methods: ['GET'])]
    public function trajectsForMoyenTransport(MoyenTransport $moyenTransport): Response
    {
        // Fetch trajects related to the specified moyen de transport
        $trajects = $moyenTransport->getTrajets();

        return $this->render('moyen_transport/trajects.html.twig', [
            'moyenTransport' => $moyenTransport,
            'trajects' => $trajects,
        ]);
    }
    #[Route('/show_in_map/{id}', name: 'app_moyen_transport_map', methods: ['GET'])]
    public function Map( MoyenTransport $id,EntityManagerInterface $entityManager ): Response
    {

        $id = $entityManager
            ->getRepository(MoyenTransport::class)->findBy( 
                ['id'=>$id ]
            );
        return $this->render('moyen_transport/index.html.twig', [
            'moyen_transport' => $id,
        ]);
    }
    
}
