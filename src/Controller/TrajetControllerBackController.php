<?php

namespace App\Controller;

use App\Entity\Trajet;
use App\Form\Trajet1Type;
use App\Repository\TrajetRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;

#[Route('/trajet/controller/back')]
class TrajetControllerBackController extends AbstractController
{
    #[Route('/', name: 'app_trajet_controller_back_index', methods: ['GET','POST'])]
    public function index(PaginatorInterface $paginator,TrajetRepository $trajetRepository,Request $request,EntityManagerInterface $entityManager): Response
    {   
        $trajetQuery = $trajetRepository->createQueryBuilder('r')
        ->orderBy('r.date', 'DESC')
        ->getQuery();

    
        $pagination = $paginator->paginate(
            $trajetQuery, 
            $request->query->getInt('page', 1), 
            8
        );
       
        $trajet = $entityManager
        ->getRepository(Trajet::class)
        ->findAll();

        $back = null;
        
        if($request->isMethod("POST")){
            if ( $request->request->get('optionsRadios')){
                $SortKey = $request->request->get('optionsRadios');
                switch ($SortKey){
                    case 'heure':
                        $trajet = $trajetRepository->SortByheure();
                        break;

                    case 'date':
                        $trajet = $trajetRepository->SortBydate();
                        break;

                }
            }
             
      if ( $trajet){
                $back = "success";
            }else{
                $back = "failure";
            }
            }
        return $this->render('trajet_controller_back/index.html.twig', [
            'trajets' =>$trajet,
            'back' =>$back,
            'pagination' => $pagination
        ]);
    }

    #[Route('/new', name: 'app_trajet_controller_back_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $trajet = new Trajet();
        $form = $this->createForm(Trajet1Type::class, $trajet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($trajet);
            $entityManager->flush();

            return $this->redirectToRoute('app_trajet_controller_back_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('trajet_controller_back/new.html.twig', [
            'trajet' => $trajet,
            'form' => $form,
            'action' => 'add'
        ]);
    }

    #[Route('/{id}', name: 'app_trajet_controller_back_show', methods: ['GET'])]
    public function show(Trajet $trajet): Response
    {
        return $this->render('trajet_controller_back/show.html.twig', [
            'trajet' => $trajet,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_trajet_controller_back_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Trajet $trajet, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(Trajet1Type::class, $trajet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_trajet_controller_back_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('trajet_controller_back/edit.html.twig', [
            'trajet' => $trajet,
            'form' => $form,
            'action' => 'edit'
        ]);
    }

    #[Route('/{id}', name: 'app_trajet_controller_back_delete', methods: ['POST'])]
    public function delete(Request $request, Trajet $trajet, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$trajet->getId(), $request->request->get('_token'))) {
            $entityManager->remove($trajet);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_trajet_controller_back_index', [], Response::HTTP_SEE_OTHER);
    }
}
