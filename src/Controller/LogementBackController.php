<?php

namespace App\Controller;
use Twilio\Rest\Client;
use App\Entity\Logement;
use App\Form\Logement1Type;
use App\Repository\EquipementRepository;
use App\Repository\LogementRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\JwtTokenService;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Mapping\Entity;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

//#[Route('/logement/back')]
class LogementBackController extends AbstractController
{
    #[Route('/logement/back', name: 'app_logement_back_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager ,LogementRepository $logementRepository, EquipementRepository $equipementRepository, PaginatorInterface $paginator,Request $request): Response
    {   
        $typeStatistics = $entityManager->createQueryBuilder()
        ->select('p.TypeLog,COUNT(p.id) as TypeLogCount')
        ->from('App\Entity\Logement', 'p')
        ->groupBy('p.TypeLog')
        ->getQuery()
        ->getResult();

        $equipements = $equipementRepository->findAll();
        $logementQuery = $logementRepository->createQueryBuilder('r')
        ->orderBy('r.nom', 'DESC')
        ->getQuery();

    
        $pagination = $paginator->paginate(
            $logementQuery, 
            $request->query->getInt('page', 1), 
            5
        );

        return $this->render('logement_back/index.html.twig', [
            'logements' => $logementRepository->findAll(),
            'equipements' => $equipements, // Use filtered logements here
            'pagination' => $pagination,
            'typeStatistics' => $typeStatistics,

        ]);
    }
    #[Route('/logement/back/{id}/modifier-etat', name: 'app_modifier_etat_logement')]
    public function modifierEtatLogement($id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $logement = $entityManager->getRepository(Logement::class)->find($id);
        $user = $this->getUser();

        $tel=strval($user->getNumero());
    
        if (!$logement) {
            throw $this->createNotFoundException('Le logement avec l\'ID ' . $id . ' n\'existe pas');
        }
    
        // Modifier l'état du logement selon la logique de votre application
        $logement->setEtat("Acceptee"); // Remplacez 'nouvel_etat' par le nouvel état souhaité
      
        // Enregistrer les modifications
        $entityManager->flush();
        $accountSid = 'ACb0d367046da4463fd88b43989996bc8d';
        $authToken = '6d0a3d7e12b11d0f413fb748361e00b0';
        $client = new Client($accountSid, $authToken);

        $message = $client->messages->create(
            '+216'.$tel, // replace with admin's phone number
            [
                'from' => '+19725841982', // replace with your Twilio phone number
                'body' => 'votre logement est acceptée: ' . $logement->getNom(),
            ]
        );
    
        // Rediriger ou retourner une réponse appropriée
        return $this->redirectToRoute('app_logement_back_index', ['id' => $id]);
    }
    #[Route('/logement/back/{id}/refuser-etat', name: 'app_refuser_etat_logement')]
    public function refuserEtatLogement($id, EntityManagerInterface $entityManager): Response
    {
        // Récupérer le logement à partir de l'ID
        $logement = $entityManager->getRepository(Logement::class)->find($id);

        if (!$logement) {
            throw $this->createNotFoundException('Logement non trouvé avec l\'identifiant: '.$id);
        }

        // Mettre à jour l'état du logement (par exemple, changer un champ "état" dans votre entité Logement)
        $logement->setEtat('Refusé'); // Supposons que vous avez un champ "état" dans votre entité Logement

        // Enregistrer les modifications dans la base de données
        $entityManager->flush();

        // Rediriger ou retourner une réponse appropriée
        return $this->redirectToRoute('app_logement_back_index'); // Redirige vers la liste des logements par exemple
    }

    
    #[Route('/logement/back/new', name: 'app_logement_back_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, ParameterBagInterface $parameterBag): Response
    {
        $logement = new logement();
        $form = $this->createForm(logement1Type::class, $logement);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            // Vérifiez si le champ image est présent dans le formulaire soumis
            if ($form->has('image')) {
                $file = $form['image']->getData();
                if ($file) {
                    $uploadsDirectory = $parameterBag->get('uploads_directory');
                    $filename = md5(uniqid()) . '.' . $file->guessExtension();
                    $file->move($uploadsDirectory, $filename);
                    $logement->setImage($filename);
                }
            }
            
            // Accéder à la valeur du champ type_categorie depuis la requête
            
            // Faites ce que vous devez faire avec la valeur de type_categorie
            
            $entityManager->persist($logement);
            $entityManager->flush();
    
            return $this->redirectToRoute('app_equipement_back_new', [], Response::HTTP_SEE_OTHER);
        }
    
        return $this->renderForm('logement_back/new.html.twig', [
            'logement$logement' => $logement,
            'form' => $form,
        ]);
    }


    #[Route('/logement/back/{id}', name: 'app_logement_back_show', methods: ['GET'])]
    public function show(Logement $logement): Response
    {
        return $this->render('logement_back/show.html.twig', [
            'logement' => $logement,
        ]);
    }

    #[Route('/logement/back/{id}/edit', name: 'app_logement_back_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Logement $logement, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(Logement1Type::class, $logement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_logement_back_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('logement_back/edit.html.twig', [
            'logement' => $logement,
            'form' => $form,
        ]);
    }

    #[Route('/logement/back/{id}', name: 'app_logement_back_delete', methods: ['POST'])]
    public function delete(Request $request, Logement $logement, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$logement->getId(), $request->request->get('_token'))) {
            $entityManager->remove($logement);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_logement_back_index', [], Response::HTTP_SEE_OTHER);
    }
    // #[Route('/posts', name: 'posts')]
    // public function showSponsorByAdmin(JwtTokenService $logementStatisticsService, logementRepository $logementRepository): Response
    // {
    //     $statistics = $logementStatisticsService->getSponsorStatistics();
    //     return $this->render('back_office\dashboard\dashboard.html.twig', [
    //         'statistics' => $statistics
    //     ]);
    // }


    /**
     * @Route("/logement/back/delete-selected", name="deleteSelected", methods={"POST"})
     */
    public function deleteSelected(Request $request, LogementRepository $logementRepository): Response
    {
        $data = json_decode($request->getContent(), true);
        $ids = $data['ids'] ?? [];
        $token = $data['_token'] ?? '';
        if (!$this->isCsrfTokenValid('delete_selected', $token)) {
            return new JsonResponse(['status' => 'error', 'message' => 'Invalid CSRF token.'], Response::HTTP_FORBIDDEN);
        }

        if (!empty($ids)) {
            $logementRepository->removeByIds($ids);
            return new JsonResponse(['status' => 'success', 'message' => 'Tickets deleted successfully.']);
        }

        return new JsonResponse(['status' => 'error', 'message' => 'No tickets were deleted.'], Response::HTTP_BAD_REQUEST);
    }
}
