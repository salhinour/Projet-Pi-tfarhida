<?php

namespace App\Controller;

use App\Entity\Activitee;
use App\Form\ActiviteeType;
use App\Repository\ActiviteeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\CategorieRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Label\Label;
use Endroid\QrCode\Color\Color;
use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\Label\LabelAlignment;
use Endroid\QrCode\Writer\PngWriter;




class ActiviteeController extends AbstractController
{
    
    #[Route('/activite', name: 'app_activitee_index', methods: ['GET'])]
    public function index(ActiviteeRepository $activiteeRepository): Response
    {
        
        $this->addFlash('success', 'Les activités ont été mises à jour avec succès.');

        return $this->render('activitee/index.html.twig', [
            'activitees' => $activiteeRepository->findAll(),
        ]);
    }
    #[Route('/act', name: 'app_activitee_indexx', methods: ['GET'])]
    public function indexx(ActiviteeRepository $activiteeRepository, CategorieRepository $categorieRepository, PaginatorInterface $paginator, Request $request): Response
    {
        $selectedState = $request->query->get('activity'); // Récupérer le nom de l'activité depuis la requête GET
        
        // Si un nom d'activité est spécifié, filtrer les activités en fonction de ce nom
        if ($selectedState) {
            $activitees = $activiteeRepository->findBy(['nom' => $selectedState]);
        } else {
            // Sinon, récupérer toutes les activités
            $activitees = $activiteeRepository->findBy(['etat' => 'Accepté']); // Remplacer par votre méthode de récupération des activités acceptées
        }
        
        // Paginer les activités récupérées
        $activitees = $paginator->paginate($activitees, $request->query->getInt('page', 1), 8);
    
        return $this->render('activitee/activite.html.twig', [
            'activitees' => $activitees, 
            'categories' => $categorieRepository->findAll(),
            'selectedState' => $selectedState,
        ]);
    
    
    

    

}
 
    
        #[Route('/new', name: 'app_activitee_new', methods: ['GET', 'POST'])]
        public function new(Request $request, EntityManagerInterface $entityManager, ParameterBagInterface $parameterBag): Response
        {
            $activitee = new Activitee();
            $form = $this->createForm(ActiviteeType::class, $activitee);
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
        
                return $this->redirectToRoute('app_activitee_index', [], Response::HTTP_SEE_OTHER);
            }
        
            return $this->renderForm('activitee/new.html.twig', [
                'activitee' => $activitee,
                'form' => $form,
            ]);
        }
     
        // #[Route('/{id}', name: 'app_activitee_show', methods: ['GET'])]
        // public function show($id ,EntityManagerInterface $entityManager): Response
        // {
            
        //    $activitee = $entityManager->getRepository(Activitee::class)->find($id);
        //     return $this->render('activitee/show.html.twig', [
        //           'activitee' => $activitee,
        //     ]);
            
        // }
    #[Route('/{id}/desc', name: 'app_activitee_desc', methods: ['GET'])]
    public function descriptif(Activitee $activitee): Response
    {
        return $this->render('activitee/activitee_detail.html.twig', [
            'activitee' => $activitee,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_activitee_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Activitee $activitee, EntityManagerInterface $entityManager,ParameterBagInterface $parameterBag): Response
    {
        $form = $this->createForm(ActiviteeType::class, $activitee);
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
    
            return $this->redirectToRoute('app_activitee_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('activitee/edit.html.twig', [
            'activitee' => $activitee,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_activitee_delete', methods: ['POST'])]
    public function delete(Request $request, Activitee $activitee, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$activitee->getId(), $request->request->get('_token'))) {
            $entityManager->remove($activitee);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_activitee_index', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('/show_in_map/{id}', name: 'app_evenement_map', methods: ['GET'])]
    public function Map( Activitee $id,EntityManagerInterface $entityManager ): Response
    {

        $id = $entityManager
            ->getRepository(Activitee::class)->findBy( 
                ['id'=>$id ]
            );
        return $this->render('activitee/api_arcgis.html.twig', [
            'activitees' => $id,
        ]);
    }
#[Route('/generate_qr_code/{id}', name: 'generate_qr_code', methods: ['POST'])]
    public function generateQrCode(Request $request): Response
    {
        $text = $request->request->get('text');
        $qrCode = QrCode::create($text)
            ->setSize(600)
            ->setMargin(40)
            ->setForegroundColor(new Color(0, 0, 128)) // Dark blue foreground color
            ->setBackgroundColor(new Color(153, 204, 255))
            ->setErrorCorrectionLevel(ErrorCorrectionLevel::High); // Set error correction level to HIGH

        // Create label
        $label = Label::create("CoLocStudy")
            ->setTextColor(new Color(255, 0, 0)) // Red text color
            ->setAlignment(LabelAlignment::Left); // Align label to left

        // Create PNG writer
        $writer = new PngWriter();

        // Write QR code to PNG image with label
        $result = $writer->write($qrCode, label: $label);

        // Output QR code image to the browser
        return new Response($result->getString(), Response::HTTP_OK, ['Content-Type' => $result->getMimeType()]);
    }
}
