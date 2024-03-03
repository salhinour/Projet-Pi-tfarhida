<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use PhpOffice\PhpSpreadsheet\Spreadsheet; // Ajoutez cette ligne pour importer la classe Spreadsheet
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Symfony\Component\HttpFoundation\StreamedResponse;

use App\Repository\UserRepository; // Importez le repository de l'entité User
class ExelController extends AbstractController
{
  #[Route("/export/excel", name: 'export_excel')]
   public function exportExcel(UserRepository $userRepository)
  {
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();

    // Définir les en-têtes des colonnes
    $sheet->setCellValue('A1', 'ID');
    $sheet->setCellValue('B1', 'Email');
    $sheet->setCellValue('C1', 'Nom');
    $sheet->setCellValue('D1', 'Prénom');
    $sheet->setCellValue('E1', 'Rôle');
    // ... Ajoutez plus de titres de colonnes si nécessaire

    // Récupérer les utilisateurs de la base de données
    $utilisateurs = $userRepository->findAll();

    // Remplir les données des utilisateurs
    $rowNumber = 2; // Commencer à partir de la ligne 2, puisque nous avons déjà les en-têtes
    foreach ($utilisateurs as $utilisateur) {
        $sheet->setCellValue('A' . $rowNumber, $utilisateur->getId());
        $sheet->setCellValue('B' . $rowNumber, $utilisateur->getEmail());
        $sheet->setCellValue('C' . $rowNumber, $utilisateur->getLastName());
        $sheet->setCellValue('D' . $rowNumber, $utilisateur->getFirstName());
        $sheet->setCellValue('E' . $rowNumber, $utilisateur->getRoleTitle()); // Utilisez la méthode getRoleTitle pour obtenir le titre du rôle
        // ... Continuez à remplir d'autres détails de l'utilisateur si nécessaire
        $rowNumber++;
    }

    // Création du writer
    $writer = new Xlsx($spreadsheet);

    // Création de la réponse StreamedResponse
    $response = new StreamedResponse(function () use ($writer) {
        $writer->save('php://output');
    });

    // Définition des en-têtes de la réponse pour le téléchargement du fichier
    $response->headers->set('Content-Type', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    $response->headers->set('Content-Disposition', 'attachment; filename="liste_utilisateurs.xlsx"');
    $response->headers->set('Cache-Control','max-age=0');

    return $response;
}
}