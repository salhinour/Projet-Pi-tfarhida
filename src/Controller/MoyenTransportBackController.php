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
use Knp\Component\Pager\PaginatorInterface;
use Twilio\Rest\Client;


#[Route('/moyen/transport/back')]
class MoyenTransportBackController extends AbstractController
{
    #[Route('/', name: 'app_moyen_transport_back_index', methods: ['GET','POST'])]
    public function index(PaginatorInterface $paginator,MoyenTransportRepository $moyenTransportRepository,Request $request,EntityManagerInterface $entityManager): Response
    {   
        $typeStatistics = $entityManager->createQueryBuilder()
        ->select('p.type, COUNT(p.id) as typeCount')
        ->from('App\Entity\MoyenTransport', 'p')
        ->groupBy('p.type')
        ->getQuery()
        ->getResult();



        $moyentransportQuery = $moyenTransportRepository->createQueryBuilder('r')
        ->orderBy('r.type', 'DESC')
        ->getQuery();

    
        $pagination = $paginator->paginate(
            $moyentransportQuery, 
            $request->query->getInt('page', 1), 
            8
        );

        $moyen = $entityManager
        ->getRepository(MoyenTransport::class)
        ->findAll();

        $back = null;
        
        if($request->isMethod("POST")){
            if ( $request->request->get('optionsRadios')){
                $SortKey = $request->request->get('optionsRadios');
                switch ($SortKey){
                    case 'type':
                        $moyen = $moyenTransportRepository->SortBytype();
                        break;

                    case 'lieu':
                        $moyen = $moyenTransportRepository->SortBylieu();
                        break;

                    case 'capacite':
                        $moyen = $moyenTransportRepository->SortBycapacite();
                        break;


                }
            }
             
      if ( $moyen){
                $back = "success";
            }else{
                $back = "failure";
            }
            }
        return $this->render('moyen_transport_back/index.html.twig', [
            'moyen_transports' =>$moyen,
            'back' =>$back,
            'pagination' => $pagination,
            'types' => $moyenTransportRepository->findAll(),
           'typeStatistics' => $typeStatistics,
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
            'action' => 'add'
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
            'action' => 'edit'
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
    #[Route('/{id}/refuser-valide', name: 'app_refuser_moyen_transport')]
    public function refuserEtatLogement($id, EntityManagerInterface $entityManager): Response
    {
        // Récupérer le logement à partir de l'ID
        $moyen = $entityManager->getRepository(MoyenTransport::class)->find($id);

        if (!$moyen) {
            throw $this->createNotFoundException('Logement non trouvé avec l\'identifiant: '.$id);
        }

        // Mettre à jour l'état du logement (par exemple, changer un champ "état" dans votre entité Logement)
        $moyen->setValide(0); // Supposons que vous avez un champ "état" dans votre entité Logement

        // Enregistrer les modifications dans la base de données
        $entityManager->flush();

        // Rediriger ou retourner une réponse appropriée
        return $this->redirectToRoute('app_moyen_transport_back_index'); // Redirige vers la liste des logements par exemple
    }
    #[Route('/{id}/modifier-valide', name: 'app_valider_moyen_transport')]
    public function modifierEtatLogement($id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $moyen = $entityManager->getRepository(MoyenTransport::class)->find($id);
    
        if (!$moyen) {
            throw $this->createNotFoundException('Le logement avec l\'ID ' . $id . ' n\'existe pas');
        }
    
        // Modifier l'état du logement selon la logique de votre application
        $moyen->setValide("1"); // Remplacez 'nouvel_etat' par le nouvel état souhaité
    
        // Enregistrer les modifications
        $entityManager->flush();
    
        // Rediriger ou retourner une réponse appropriée
        return $this->redirectToRoute('app_moyen_transport_back_index', ['id' => $id]);
    }
}
