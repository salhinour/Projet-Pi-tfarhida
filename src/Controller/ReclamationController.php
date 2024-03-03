<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Form\ReclamationType;
use App\Repository\ReclamationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Knp\Component\Pager\PaginatorInterface;

#[Route('/reclamation')]
class ReclamationController extends AbstractController
{
    #[Route('/', name: 'app_reclamation_index', methods: ['GET','POST'])]
    public function index(ReclamationRepository $reclamationRepository, PaginatorInterface $paginator, EntityManagerInterface $entityManager, Request $request): Response
    {
        $reclamations = $entityManager
            ->getRepository(Reclamation::class)
            ->findAll();

        /////////
        // $back = null;

        // if ($request->isMethod("POST")) {
        //     if ($request->request->get('optionsRadios')) {
        //         $SortKey = $request->request->get('optionsRadios');
        //         switch ($SortKey) {
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
        // }
        $reclamationsQuery = $reclamationRepository->createQueryBuilder('r')
        ->orderBy('r.date', 'DESC')
        ->getQuery();

    
        $pagination = $paginator->paginate(
            $reclamationsQuery, 
            $request->query->getInt('page', 1), 
            5
        );
        return $this->render('reclamation/index.html.twig', [
            'pagination' => $pagination,
        ]);
    }

    #[Route('/new', name: 'app_reclamation_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, ParameterBagInterface $parameterBag): Response
    {
        $reclamation = new Reclamation();
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            if ($form->has('image')) {
                $file = $form['image']->getData();
                if ($file) {
                    $uploadsDirectory = $parameterBag->get('uploads_directory');
                    $filename = md5(uniqid()) . '.' . $file->guessExtension();
                    $file->move($uploadsDirectory, $filename);
                    $reclamation->setImage($filename);
                }
            }

/*
            $dictionaryPath = '/path/to/dictionary/file.txt';

            // Set the dictionary for the Builder class
            Builder::setDictionary($dictionaryPath);
            */
            $content = $reclamation->getDescriptionReclamation();
            $cleanedContenu = \ConsoleTVs\Profanity\Builder::blocker($content)->filter();
            $reclamation->setDescriptionReclamation($cleanedContenu);
            $entityManager->persist($reclamation);
            $entityManager->flush();

            return $this->redirectToRoute('app_reclamation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reclamation/new.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_reclamation_show', methods: ['GET'])]
    public function show(Reclamation $reclamation): Response
    {
        $response = $reclamation->getReponse();

        return $this->render('reclamation/show.html.twig', [
            'reclamation' => $reclamation,
            'response' => $response,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_reclamation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Reclamation $reclamation, EntityManagerInterface $entityManager, ParameterBagInterface $parameterBag): Response
    {
        if ($reclamation->getReponse() !== null) {
            // Si la réclamation a une réponse, redirigez l'utilisateur ou affichez un message d'erreur
            // Exemple : return new RedirectResponse($this->generateUrl('app_reclamation_index'));
        }

        // Sinon, continuez avec le processus d'édition de la réclamation
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $file = $form['image']->getData();

            if ($file instanceof UploadedFile) {

                $uploadsDirectory = $parameterBag->get('uploads_directory');
                $filename = md5(uniqid()) . '.' . $file->guessExtension();
                $file->move($uploadsDirectory, $filename);

                $reclamation->setImage($filename);
            }

            $entityManager->flush();

            return $this->redirectToRoute('app_reclamation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reclamation/edit.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_reclamation_delete', methods: ['POST'])]
    public function delete(Request $request, Reclamation $reclamation, EntityManagerInterface $entityManager): Response
    {
        if ($reclamation->getReponse() !== null) {
            // Si la réclamation a une réponse, redirigez l'utilisateur ou affichez un message d'erreur
             return new RedirectResponse($this->generateUrl('app_reclamation_index'));
        }

        // Sinon, continuez avec le processus de suppression de la réclamation
        if ($this->isCsrfTokenValid('delete' . $reclamation->getId(), $request->request->get('_token'))) {
            $entityManager->remove($reclamation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_reclamation_index', [], Response::HTTP_SEE_OTHER);
    }
}
