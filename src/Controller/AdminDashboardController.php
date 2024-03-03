<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use App\Repository\UserRepository;

#[IsGranted('ROLE_ADMIN')]
#[Route('admin/')]
class AdminDashboardController extends AbstractController
{
    /**
     * Dashboard
     *
     * @Route("tableau-de-bord", name="admin_dashboard_index")
     * 
     * @param UserRepository $userRepository
     * @return Response
     */
    public function index(UserRepository $userRepository)
    {
         // Récupérer les décomptes
         $Users = $userRepository->countUser();
         $adminUsers = $userRepository->countAdminUsers();
         $collabUsers = $userRepository->countCollaboratorUsers();
         $utilisateur =$userRepository->countNombresUsers();
         
         // Calculer les pourcentages
         $userPercentage = ($Users > 0) ? (($Users / $Users) * 100) : 0;
         $adminPercentage = ($Users > 0) ? (($adminUsers / $Users) * 100) : 0;
         $collabPercentage = ($Users > 0) ? (($collabUsers / $Users) * 100) : 0;
         $utilisateurPercentage =($Users > 0) ? (($utilisateur / $Users) * 100) : 0;
    
 
        return $this->render('admin/dashboard/index.html.twig',[
            'users' => $userRepository->countUser(),
            'admin'=> $userRepository->countAdminUsers(),
            'collab'=> $userRepository->countCollaboratorUsers(),
            'utilisateur' =>$userRepository->countNombresUsers(),

            'userPercentage' => $userPercentage,
            'adminPercentage' => $adminPercentage,
            'collabPercentage' => $collabPercentage,
            'utilisateurPercentage'=>$utilisateurPercentage,
        ]);
}

}