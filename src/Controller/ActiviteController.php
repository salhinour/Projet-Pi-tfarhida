<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ActiviteController extends AbstractController
{
    #[Route('/activite', name: 'app_activite', methods: ['GET', 'POST'])]
    public function index(): Response
    {
        return $this->render('activite/index.html.twig', [
            'controller_name' => 'ActiviteController',
        ]);
        
    }
    
    
}
