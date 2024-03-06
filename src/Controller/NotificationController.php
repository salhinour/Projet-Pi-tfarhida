<?php

namespace App\Controller;

use App\Entity\Notification;
use App\Repository\NotificationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class NotificationController extends AbstractController
{
    
     #[Route("/superadmin/notifications", name:"superadmin_notifications")]
    public function listNotifications(EntityManagerInterface $entityManager,NotificationRepository $rep)
    {
        //$user = $this->getUser();
        //$notifications = $entityManager->getRepository(Notification::class)->findByReclamation($user);

        return $this->render('reclamation_back/notifications.html.twig', [
            'notifications' => $rep->findAll(),
        ]);
    }
}