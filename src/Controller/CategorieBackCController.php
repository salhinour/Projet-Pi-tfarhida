<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Form\CategorieType;
use App\Repository\CategorieRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;


#[Route('/categorie/back/c')]
class CategorieBackCController extends AbstractController
{
    #[Route('/', name: 'app_categorie_back_c_index', methods: ['GET'])]
    public function index(CategorieRepository $categorieRepository,PaginatorInterface $paginator,Request $request): Response
    {
        $activiteeQuery = $categorieRepository->createQueryBuilder('r')
        ->orderBy('r.type_categorie', 'DESC')
        ->getQuery();

    
        $pagination = $paginator->paginate(
            $activiteeQuery, 
            $request->query->getInt('page', 1), 
            3
        );
        return $this->render('categorie_back_c/index.html.twig', [
            'categories' => $categorieRepository->findAll(),
            'pagination' => $pagination

        ]);
    }

    #[Route('/new', name: 'app_categorie_back_c_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $categorie = new Categorie();
        $form = $this->createForm(CategorieType::class, $categorie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($categorie);
            $entityManager->flush();

            return $this->redirectToRoute('app_categorie_back_c_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('categorie_back_c/new.html.twig', [
            'categorie' => $categorie,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_categorie_back_c_show', methods: ['GET'])]
    public function show(Categorie $categorie): Response
    {
        return $this->render('categorie_back_c/show.html.twig', [
            'categorie' => $categorie,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_categorie_back_c_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Categorie $categorie, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CategorieType::class, $categorie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_categorie_back_c_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('categorie_back_c/edit.html.twig', [
            'categorie' => $categorie,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_categorie_back_c_delete', methods: ['POST'])]
    public function delete(Request $request, Categorie $categorie, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$categorie->getId(), $request->request->get('_token'))) {
            $entityManager->remove($categorie);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_categorie_back_c_index', [], Response::HTTP_SEE_OTHER);
    }
}
