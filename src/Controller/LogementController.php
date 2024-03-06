<?php

namespace App\Controller;

use App\Entity\Logement;
use App\Form\LogementType;
use App\Repository\EquipementRepository;
use App\Repository\LogementRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twilio\Rest\Client;
use Knp\Component\Pager\PaginatorInterface;


#[Route('/logement')]
class LogementController extends AbstractController
{
    #[Route('/', name: 'app_logement_index', methods: ['GET'])]
public function index(
    LogementRepository $logementRepository,
    EquipementRepository $equipementRepository,
    PaginatorInterface $paginator,
    Request $request
): Response {
    // Récupérer l'état sélectionné depuis la requête
    $selectedState = $request->query->get('TypeLog');
    $selectedPrice = $request->query->get('Prix');

    // Récupérer les activités en fonction de l'état sélectionné
    $logementQuery = $logementRepository->createQueryBuilder('a')
        ->orderBy('a.id', 'DESC'); // Tri par défaut

    $filteredLogements = []; // Initialize an empty array for filtered logements

    if ($selectedState) {
        $filteredLogements = $logementRepository->findByTypeAndEtatTrue($selectedState);
    }else{
        $filteredLogements=$logementRepository->findAllWithEtatTrue();
    }

    if ($selectedPrice) {
        // Extrayez la plage de prix à partir du paramètre sélectionné
        $Price = explode('-', $selectedPrice);
        $minPrice = $Price[0];
        $maxPrice = $Price[1];

        // Filtrez les logements en fonction de la plage de prix
        $filteredLogements = $logementRepository->findByPrix($minPrice, $maxPrice);
    }

    // Paginer les activités récupérées
    $logements = $paginator->paginate($filteredLogements, $request->query->getInt('page', 1), 6);

    $equipements = $equipementRepository->findAll();

    return $this->render('logement/index.html.twig', [
        'logements' => $logements,
        'equipements' => $equipements,
        'selectedState' => $selectedState,
        'selectedPrice' => $selectedPrice,
    ]);
}

    // #[Route('/new', name: 'app_logement_new', methods: ['GET', 'POST'])]
    // public function new(Request $request, EntityManagerInterface $entityManager): Response
    // {
    //     $logement = new Logement();
    //     $form = $this->createForm(LogementType::class, $logement);
    //     $form->handleRequest($request);

    //     if ($form->isSubmitted() && $form->isValid()) {
    //         $entityManager->persist($logement);
    //         $entityManager->flush();
            

    //         return $this->redirectToRoute('app_logement_index', [], Response::HTTP_SEE_OTHER);
    //     }

    //     return $this->renderForm('logement/new.html.twig', [
    //         'logement' => $logement,
    //         'form' => $form,
    //     ]);
    // }
    #[Route('/new', name: 'app_logement_new', methods: ['GET', 'POST'])]
        public function new(Request $request, EntityManagerInterface $entityManager, ParameterBagInterface $parameterBag): Response
        {
            $logement = new logement();
            $form = $this->createForm(logementType::class, $logement);
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
        
                return $this->redirectToRoute('app_equipement_new', [
                    
                    'logement_id' => $logement->getId(),
                ], Response::HTTP_SEE_OTHER);
            }
        
            return $this->renderForm('logement/new.html.twig', [
                '$logement' => $logement,
                'form' => $form,
            ]);
        }

        #[Route('/show/{id}/', name: 'app_logement_show', methods: ['GET'])]
        public function show(Logement $logement): Response
        {
            $equipements = $logement->getEquipement();
        
            return $this->render('logement/show.html.twig', [
                'logement' => $logement,
                'equipements' => $equipements,
            ]);
        }

    #[Route('/{id}/edit', name: 'app_logement_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Logement $logement, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(LogementType::class, $logement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_logement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('logement/edit.html.twig', [
            'logement' => $logement,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_logement_delete', methods: ['POST'])]
    public function delete(Request $request, Logement $logement, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$logement->getId(), $request->request->get('_token'))) {
            $equipement = $logement->getEquipement();
            $entityManager->remove($equipement);
            $entityManager->remove($logement);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_logement_index', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('/mylogement', name:'app_logement_mylist')]
    function Rechercheavisbyclient(LogementRepository $Repository){
       
        
        return $this->render('logement/Mylist.html.twig',[
            'logements' => $Repository->findMylogement($this->getUser()),
         ]);
       }

       #[Route('/show_in_map/{id}', name: 'app_logement_map', methods: ['GET'])]
    public function Map( Logement $id,EntityManagerInterface $entityManager ): Response
    {

        $id = $entityManager
            ->getRepository(Logement::class)->findBy( 
                ['id'=>$id ]
            );
        return $this->render('logement/api_arcgis.html.twig', [
            'logements' => $id,
        ]);
    }
    
}
