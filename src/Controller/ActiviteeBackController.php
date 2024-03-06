<?php

namespace App\Controller;

use App\Entity\Activitee;
use App\Form\Activitee1Type;
use App\Repository\ActiviteeRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Knp\Component\Pager\PaginatorInterface;


#[Route('/activitee/back')]
class ActiviteeBackController extends AbstractController
{
    #[Route('/', name: 'app_activitee_back_index', methods: ['GET','POST'])]
    public function index(ActiviteeRepository $activiteeRepository, Request $request, EntityManagerInterface $entityManager, PaginatorInterface $paginator): Response
    {
        
        $back=null;
        // Récupérer l'état sélectionné depuis la requête
        $selectedState = $request->query->get('etat'); // Utiliser query au lieu de request pour récupérer les paramètres GET
    
        // Récupérer les activités en fonction de l'état sélectionné
        $activiteeQuery = $activiteeRepository->createQueryBuilder('a')
            ->orderBy('a.id', 'DESC'); // Tri par défaut
    
        if ($selectedState) {
            $activiteeQuery->andWhere('a.etat = :etat')
                ->setParameter('etat', $selectedState);
        }
    
        $pagination = $paginator->paginate(
            $activiteeQuery->getQuery(),
            $request->query->getInt('page', 1),
            5
        );
    
        return $this->render('activitee_back/index.html.twig', [
            'pagination' => $pagination,
            'back' =>$back,
            'selectedState' => $selectedState // Passer la valeur de l'état sélectionné au template
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
    public function modifierEtatActivite($id,MailerInterface $mailer,UserRepository $userRepository): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $activitee = $entityManager->getRepository(Activitee::class)->find($id);
    
        if (!$activitee) {
            throw $this->createNotFoundException('Le activitee avec l\'ID ' . $id . ' n\'existe pas');
        }
    
        // Modifier l'état du activitee selon la logique de votre application
        $activitee->setEtat("Accepté");
    
        // Enregistrer les modifications
        $entityManager->flush();
        $admin = $this->getUser();
        //$user=$activitee->getUser()->getEmail();
        $userEmail = $activitee->getUser()->getEmail() ?? null;
        //$user = $userRepository->find($id);
        $email = (new Email())
        ->from($admin->getEmail())
        ->to($userEmail)
        //->To('salhi.nour@esprit.tn')
        ->subject('reponse')
        ->text("votre demande est accepté!!!");
        $mailer->send($email);


        // Rediriger ou retourner une réponse appropriée
        return $this->redirectToRoute('app_activitee_back_index', ['id' => $id]);
    }
    #[Route('/{id}/refuser-etat', name: 'app_refuser_etat_activite')]
    public function refuserEtatLogement($id, EntityManagerInterface $entityManager,MailerInterface $mailer): Response
    {
        // Récupérer le logement à partir de l'ID
        $activitee = $entityManager->getRepository(Activitee::class)->find($id);

        if (!$activitee) {
            throw $this->createNotFoundException('Activite non trouvé avec l\'identifiant: '.$id);
        }

        // Mettre à jour l'état du logement (par exemple, changer un champ "état" dans votre entité Logement)
        $activitee->setEtat("Refusé");

        // Enregistrer les modifications dans la base de données
        $entityManager->flush();

 $email = (new Email())
        ->from('salhi.nour@esprit.tn')
        ->To('salhi.nour@esprit.tn')
        ->subject('reponse')
        ->text("votre demande est refuser!!!");
        $mailer->send($email);

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