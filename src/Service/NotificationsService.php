<?php

namespace App\Service;

use App\Repository\NotificationRepository;

class NotificationsService
{
    private NotificationRepository $notificationRepository;

    public function __construct(NotificationRepository $notificationRepository)
    {
        $this->notificationRepository = $notificationRepository;
    }

    //public function getUserNotifications($user){ return $this->notificationRepository->findByUser($user);}
}