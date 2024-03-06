<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'app_activite' => [[], ['_controller' => 'App\\Controller\\ActiviteController::index'], [], [['text', '/activite']], [], [], []],
    'app_activitee_back_index' => [[], ['_controller' => 'App\\Controller\\ActiviteeBackController::index'], [], [['text', '/activitee/back/']], [], [], []],
    'app_activitee_back_new' => [[], ['_controller' => 'App\\Controller\\ActiviteeBackController::new'], [], [['text', '/activitee/back/new']], [], [], []],
    'app_activitee_back_show' => [['id'], ['_controller' => 'App\\Controller\\ActiviteeBackController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/activitee/back']], [], [], []],
    'app_modifier_etat_activite' => [['id'], ['_controller' => 'App\\Controller\\ActiviteeBackController::modifierEtatActivite'], [], [['text', '/modifier-etat'], ['variable', '/', '[^/]++', 'id', true], ['text', '/activitee/back']], [], [], []],
    'app_refuser_etat_activite' => [['id'], ['_controller' => 'App\\Controller\\ActiviteeBackController::refuserEtatLogement'], [], [['text', '/refuser-etat'], ['variable', '/', '[^/]++', 'id', true], ['text', '/activitee/back']], [], [], []],
    'app_activitee_back_edit' => [['id'], ['_controller' => 'App\\Controller\\ActiviteeBackController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/activitee/back']], [], [], []],
    'app_activitee_back_delete' => [['id'], ['_controller' => 'App\\Controller\\ActiviteeBackController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/activitee/back']], [], [], []],
    'app_activitee_index' => [[], ['_controller' => 'App\\Controller\\ActiviteeController::index'], [], [['text', '/activitee']], [], [], []],
    'app_activitee_indexx' => [[], ['_controller' => 'App\\Controller\\ActiviteeController::indexx'], [], [['text', '/act']], [], [], []],
    'app_activitee_new' => [[], ['_controller' => 'App\\Controller\\ActiviteeController::new'], [], [['text', '/new']], [], [], []],
    'app_activitee_desc' => [['id'], ['_controller' => 'App\\Controller\\ActiviteeController::descriptif'], [], [['text', '/desc'], ['variable', '/', '[^/]++', 'id', true]], [], [], []],
    'app_activitee_edit' => [['id'], ['_controller' => 'App\\Controller\\ActiviteeController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true]], [], [], []],
    'app_activitee_delete' => [['id'], ['_controller' => 'App\\Controller\\ActiviteeController::deleteactivite'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/delete']], [], [], []],
    'app_evenement_map' => [['id'], ['_controller' => 'App\\Controller\\ActiviteeController::Map'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/show_in_map']], [], [], []],
    'generate_qr_code' => [['id'], ['_controller' => 'App\\Controller\\ActiviteeController::generateQrCode'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/generate_qr_code']], [], [], []],
    'admin_account_edit' => [[], ['_controller' => 'App\\Controller\\AdminAccountController::edit'], [], [['text', '/admin/profiledition']], [], [], []],
    'admin_account_index' => [[], ['_controller' => 'App\\Controller\\AdminAccountController::index'], [], [['text', '/admin/profil']], [], [], []],
    'admin_dashboard_index' => [[], ['_controller' => 'App\\Controller\\AdminDashboardController::index'], [], [['text', '/admin/tableau-de-bord']], [], [], []],
    'admin_parameter_index' => [[], ['_controller' => 'App\\Controller\\AdminParameterController::edit'], [], [['text', '/admin/parametre']], [], [], []],
    'admin_user_index' => [[], ['_controller' => 'App\\Controller\\AdminUserController::index'], [], [['text', '/admin/utilisateur/']], [], [], []],
    'admin_user_add' => [[], ['_controller' => 'App\\Controller\\AdminUserController::add'], [], [['text', '/admin/utilisateur/add']], [], [], []],
    'admin_user_show' => [['id'], ['_controller' => 'App\\Controller\\AdminUserController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/utilisateur']], [], [], []],
    'admin_user_edit' => [['id'], ['_controller' => 'App\\Controller\\AdminUserController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/utilisateur']], [], [], []],
    'admin_user_delete' => [['id'], ['_controller' => 'App\\Controller\\AdminUserController::delete'], [], [['text', '/suppression'], ['variable', '', '[^/]++', 'id', true], ['text', '/admin/utilisateur']], [], [], []],
    'app_back' => [[], ['_controller' => 'App\\Controller\\BackController::index'], [], [['text', '/back']], [], [], []],
    'app_categorie_back_c_index' => [[], ['_controller' => 'App\\Controller\\CategorieBackCController::index'], [], [['text', '/categorie/back/c/']], [], [], []],
    'app_categorie_back_c_new' => [[], ['_controller' => 'App\\Controller\\CategorieBackCController::new'], [], [['text', '/categorie/back/c/new']], [], [], []],
    'app_categorie_back_c_show' => [['id'], ['_controller' => 'App\\Controller\\CategorieBackCController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/categorie/back/c']], [], [], []],
    'app_categorie_back_c_edit' => [['id'], ['_controller' => 'App\\Controller\\CategorieBackCController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/categorie/back/c']], [], [], []],
    'app_categorie_back_c_delete' => [['id'], ['_controller' => 'App\\Controller\\CategorieBackCController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/categorie/back/c']], [], [], []],
    'app_equipement_back_index' => [[], ['_controller' => 'App\\Controller\\EquipementBackController::index'], [], [['text', '/equipement/back/']], [], [], []],
    'app_equipement_back_new' => [[], ['_controller' => 'App\\Controller\\EquipementBackController::new'], [], [['text', '/equipement/back/new']], [], [], []],
    'app_equipement_back_show' => [['id'], ['_controller' => 'App\\Controller\\EquipementBackController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/equipement/back']], [], [], []],
    'app_equipement_back_edit' => [['id'], ['_controller' => 'App\\Controller\\EquipementBackController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/equipement/back']], [], [], []],
    'app_equipement_back_delete' => [['id'], ['_controller' => 'App\\Controller\\EquipementBackController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/equipement/back']], [], [], []],
    'app_equipement_index' => [[], ['_controller' => 'App\\Controller\\EquipementController::index'], [], [['text', '/equipement/']], [], [], []],
    'app_equipement_new' => [[], ['_controller' => 'App\\Controller\\EquipementController::new'], [], [['text', '/equipement/new']], [], [], []],
    'app_equipement_edit' => [['id'], ['_controller' => 'App\\Controller\\EquipementController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/equipement']], [], [], []],
    'app_equipement_delete' => [['id'], ['_controller' => 'App\\Controller\\EquipementController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/equipement']], [], [], []],
    'app_equipement_show' => [['equipementId'], ['_controller' => 'App\\Controller\\EquipementController::showlogement'], [], [['variable', '/', '[^/]++', 'equipementId', true], ['text', '/equipement']], [], [], []],
    'export_excel' => [[], ['_controller' => 'App\\Controller\\ExelController::exportExcel'], [], [['text', '/export/excel']], [], [], []],
    'home_index' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], [], []],
    'app_logement_back_index' => [[], ['_controller' => 'App\\Controller\\LogementBackController::index'], [], [['text', '/logement/back']], [], [], []],
    'app_modifier_etat_logement' => [['id'], ['_controller' => 'App\\Controller\\LogementBackController::modifierEtatLogement'], [], [['text', '/modifier-etat'], ['variable', '/', '[^/]++', 'id', true], ['text', '/logement/back']], [], [], []],
    'app_refuser_etat_logement' => [['id'], ['_controller' => 'App\\Controller\\LogementBackController::refuserEtatLogement'], [], [['text', '/refuser-etat'], ['variable', '/', '[^/]++', 'id', true], ['text', '/logement/back']], [], [], []],
    'app_logement_back_new' => [[], ['_controller' => 'App\\Controller\\LogementBackController::new'], [], [['text', '/logement/back/new']], [], [], []],
    'app_logement_back_show' => [['id'], ['_controller' => 'App\\Controller\\LogementBackController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/logement/back']], [], [], []],
    'app_logement_back_edit' => [['id'], ['_controller' => 'App\\Controller\\LogementBackController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/logement/back']], [], [], []],
    'app_logement_back_delete' => [['id'], ['_controller' => 'App\\Controller\\LogementBackController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/logement/back']], [], [], []],
    'app_logement_index' => [[], ['_controller' => 'App\\Controller\\LogementController::index'], [], [['text', '/logement/']], [], [], []],
    'app_logement_new' => [[], ['_controller' => 'App\\Controller\\LogementController::new'], [], [['text', '/logement/new']], [], [], []],
    'app_logement_show' => [['id'], ['_controller' => 'App\\Controller\\LogementController::show'], [], [['text', '/'], ['variable', '/', '[^/]++', 'id', true], ['text', '/logement/show']], [], [], []],
    'app_logement_edit' => [['id'], ['_controller' => 'App\\Controller\\LogementController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/logement']], [], [], []],
    'app_logement_mylist' => [[], ['_controller' => 'App\\Controller\\LogementController::Rechercheavisbyclient'], [], [['text', '/logement/mylogement']], [], [], []],
    'app_logement_map' => [['id'], ['_controller' => 'App\\Controller\\LogementController::Map'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/logement/show_in_map']], [], [], []],
    'app_moyen_transport_back_index' => [[], ['_controller' => 'App\\Controller\\MoyenTransportBackController::index'], [], [['text', '/moyen/transport/back/']], [], [], []],
    'app_moyen_transport_back_new' => [[], ['_controller' => 'App\\Controller\\MoyenTransportBackController::new'], [], [['text', '/moyen/transport/back/new']], [], [], []],
    'app_moyen_transport_back_show' => [['id'], ['_controller' => 'App\\Controller\\MoyenTransportBackController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/moyen/transport/back']], [], [], []],
    'app_moyen_transport_back_edit' => [['id'], ['_controller' => 'App\\Controller\\MoyenTransportBackController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/moyen/transport/back']], [], [], []],
    'app_moyen_transport_back_delete' => [['id'], ['_controller' => 'App\\Controller\\MoyenTransportBackController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/moyen/transport/back']], [], [], []],
    'app_refuser_moyen_transport' => [['id'], ['_controller' => 'App\\Controller\\MoyenTransportBackController::refuserEtatLogement'], [], [['text', '/refuser-valide'], ['variable', '/', '[^/]++', 'id', true], ['text', '/moyen/transport/back']], [], [], []],
    'app_valider_moyen_transport' => [['id'], ['_controller' => 'App\\Controller\\MoyenTransportBackController::modifierEtatLogement'], [], [['text', '/modifier-valide'], ['variable', '/', '[^/]++', 'id', true], ['text', '/moyen/transport/back']], [], [], []],
    'app_moyen_transport_index' => [[], ['_controller' => 'App\\Controller\\MoyenTransportController::index'], [], [['text', '/moyen/transport/']], [], [], []],
    'app_moyen_transport_new' => [[], ['_controller' => 'App\\Controller\\MoyenTransportController::new'], [], [['text', '/moyen/transport/new']], [], [], []],
    'app_moyen_transport_show' => [['id'], ['_controller' => 'App\\Controller\\MoyenTransportController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/moyen/transport/show']], [], [], []],
    'app_moyen_transport_edit' => [['id'], ['_controller' => 'App\\Controller\\MoyenTransportController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/moyen/transport']], [], [], []],
    'app_moyen_transport_delete' => [['id'], ['_controller' => 'App\\Controller\\MoyenTransportController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/moyen/transport']], [], [], []],
    'app_trajects_for_moyen_transport' => [['id'], ['_controller' => 'App\\Controller\\MoyenTransportController::trajectsForMoyenTransport'], [], [['text', '/trajects'], ['variable', '/', '[^/]++', 'id', true], ['text', '/moyen/transport']], [], [], []],
    'app_moyen_transport_map' => [['id'], ['_controller' => 'App\\Controller\\MoyenTransportController::Map'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/moyen/transport/show_in_map']], [], [], []],
    'app_front_mestransport' => [[], ['_controller' => 'App\\Controller\\MoyenTransportController::MesTranspors'], [], [['text', '/moyen/transport/transport']], [], [], []],
    'superadmin_notifications' => [[], ['_controller' => 'App\\Controller\\NotificationController::listNotifications'], [], [['text', '/superadmin/notifications']], [], [], []],
    'app_plat_index' => [[], ['_controller' => 'App\\Controller\\PlatController::index'], [], [['text', '/plat/']], [], [], []],
    'app_plat_indexfront' => [[], ['_controller' => 'App\\Controller\\PlatController::indexFront'], [], [['text', '/plat/platfront']], [], [], []],
    'app_plat_new' => [[], ['_controller' => 'App\\Controller\\PlatController::new'], [], [['text', '/plat/new']], [], [], []],
    'app_plat_show' => [['id'], ['_controller' => 'App\\Controller\\PlatController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/plat']], [], [], []],
    'app_plat_edit' => [['id'], ['_controller' => 'App\\Controller\\PlatController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/plat']], [], [], []],
    'app_plat_delete' => [['id'], ['_controller' => 'App\\Controller\\PlatController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/plat']], [], [], []],
    'app_reclamation_back_index' => [[], ['_controller' => 'App\\Controller\\ReclamationBackController::index'], [], [['text', '/reclamation/back/']], [], [], []],
    'app_reclamation_back_repondre' => [['id'], ['_controller' => 'App\\Controller\\ReclamationBackController::repondre'], [], [['text', '/repondre'], ['variable', '/', '[^/]++', 'id', true], ['text', '/reclamation/back']], [], [], []],
    'app_reclamation_back_show_response' => [['id'], ['_controller' => 'App\\Controller\\ReclamationBackController::showResponse'], [], [['text', '/show_response'], ['variable', '/', '[^/]++', 'id', true], ['text', '/reclamation/back']], [], [], []],
    'app_reclamation_back_new' => [[], ['_controller' => 'App\\Controller\\ReclamationBackController::new'], [], [['text', '/reclamation/back/new']], [], [], []],
    'app_reclamation_back_show' => [['id'], ['_controller' => 'App\\Controller\\ReclamationBackController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reclamation/back']], [], [], []],
    'app_reclamation_back_edit' => [['id'], ['_controller' => 'App\\Controller\\ReclamationBackController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/reclamation/back']], [], [], []],
    'app_reclamation_back_delete' => [['id'], ['_controller' => 'App\\Controller\\ReclamationBackController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reclamation/back']], [], [], []],
    'app_reclamation_index' => [[], ['_controller' => 'App\\Controller\\ReclamationController::index'], [], [['text', '/reclamation/']], [], [], []],
    'app_reclamation_new' => [[], ['_controller' => 'App\\Controller\\ReclamationController::new'], [], [['text', '/reclamation/new']], [], [], []],
    'app_reclamation_show' => [['id'], ['_controller' => 'App\\Controller\\ReclamationController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reclamation']], [], [], []],
    'app_reclamation_edit' => [['id'], ['_controller' => 'App\\Controller\\ReclamationController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/reclamation']], [], [], []],
    'app_reclamation_delete' => [['id'], ['_controller' => 'App\\Controller\\ReclamationController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reclamation']], [], [], []],
    'registration' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/inscription']], [], [], []],
    'app_verify_email' => [[], ['_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], [], [['text', '/verify/email']], [], [], []],
    'app_reponse_back_index' => [[], ['_controller' => 'App\\Controller\\ReponseBackController::index'], [], [['text', '/reponse/back/']], [], [], []],
    'app_reponse_back_new' => [[], ['_controller' => 'App\\Controller\\ReponseBackController::new'], [], [['text', '/reponse/back/new']], [], [], []],
    'app_reponse_back_show' => [['id'], ['_controller' => 'App\\Controller\\ReponseBackController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reponse/back']], [], [], []],
    'app_reponse_back_edit' => [['id'], ['_controller' => 'App\\Controller\\ReponseBackController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/reponse/back']], [], [], []],
    'app_reponse_back_delete' => [['id'], ['_controller' => 'App\\Controller\\ReponseBackController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reponse/back']], [], [], []],
    'app_reponse_index' => [[], ['_controller' => 'App\\Controller\\ReponseController::index'], [], [['text', '/reponse/']], [], [], []],
    'app_reponse_new' => [[], ['_controller' => 'App\\Controller\\ReponseController::new'], [], [['text', '/reponse/new']], [], [], []],
    'app_reponse_show' => [['id'], ['_controller' => 'App\\Controller\\ReponseController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reponse']], [], [], []],
    'app_reponse_edit' => [['id'], ['_controller' => 'App\\Controller\\ReponseController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/reponse']], [], [], []],
    'app_reponse_delete' => [['id'], ['_controller' => 'App\\Controller\\ReponseController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reponse']], [], [], []],
    'forgot_password' => [[], ['_controller' => 'App\\Controller\\ResetPasswordController::showForgotPasswordForm'], [], [['text', '/forgot-password']], [], [], []],
    'reset_password' => [['token'], ['_controller' => 'App\\Controller\\ResetPasswordController::resetPassword'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/reset-password']], [], [], []],
    'app_restaurant_index' => [[], ['_controller' => 'App\\Controller\\RestaurantController::index'], [], [['text', '/restaurant']], [], [], []],
    'app_restaurant_indexfront' => [[], ['_controller' => 'App\\Controller\\RestaurantController::indexFront'], [], [['text', '/restaurantfront']], [], [], []],
    'app_restaurant_new' => [[], ['_controller' => 'App\\Controller\\RestaurantController::new'], [], [['text', '/restaurant/new']], [], [], []],
    'app_restaurant_show' => [['id'], ['_controller' => 'App\\Controller\\RestaurantController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/restaurant']], [], [], []],
    'app_restaurant_showfront' => [['id'], ['_controller' => 'App\\Controller\\RestaurantController::showfront'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/restaurantfront']], [], [], []],
    'app_restaurant_edit' => [['id'], ['_controller' => 'App\\Controller\\RestaurantController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/restaurant']], [], [], []],
    'app_restaurant_delete' => [['id'], ['_controller' => 'App\\Controller\\RestaurantController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/restaurant']], [], [], []],
    'app_restaurant_map' => [['id'], ['_controller' => 'App\\Controller\\RestaurantController::Map'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/show_in_map']], [], [], []],
    'change_language' => [[], ['_controller' => 'App\\Controller\\RestaurantController::changeLanguage'], [], [['text', '/change-language']], [], [], []],
    'add_to_favorites' => [['id'], ['_controller' => 'App\\Controller\\RestaurantController::addToFavorites'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/add-to-favorites']], [], [], []],
    'remove-from_favorites' => [['id'], ['_controller' => 'App\\Controller\\RestaurantController::RemoveFromFavorites'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/remove-from-favorites']], [], [], []],
    'favorites' => [[], ['_controller' => 'App\\Controller\\RestaurantController::favorites'], [], [['text', '/favorites']], [], [], []],
    'app_restaurant_favoris' => [[], ['_controller' => 'App\\Controller\\RestaurantController::indexFrontfavoris'], [], [['text', '/restaurantfrontfavoris']], [], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/connexion']], [], [], []],
    'logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/deconnexion']], [], [], []],
    'login_success' => [[], ['_controller' => 'App\\Controller\\SecurityController::onLoginSuccess'], [], [['text', '/connexion/succes']], [], [], []],
    'app_trajet_index' => [[], ['_controller' => 'App\\Controller\\TrajetController::index'], [], [['text', '/trajet/']], [], [], []],
    'app_trajet_new' => [[], ['_controller' => 'App\\Controller\\TrajetController::new'], [], [['text', '/trajet/new']], [], [], []],
    'app_trajet_show' => [['id'], ['_controller' => 'App\\Controller\\TrajetController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/trajet']], [], [], []],
    'app_trajet_edit' => [['id'], ['_controller' => 'App\\Controller\\TrajetController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/trajet']], [], [], []],
    'app_trajet_delete' => [['id'], ['_controller' => 'App\\Controller\\TrajetController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/trajet']], [], [], []],
    'app_trajet_controller_back_index' => [[], ['_controller' => 'App\\Controller\\TrajetControllerBackController::index'], [], [['text', '/trajet/controller/back/']], [], [], []],
    'app_trajet_controller_back_new' => [[], ['_controller' => 'App\\Controller\\TrajetControllerBackController::new'], [], [['text', '/trajet/controller/back/new']], [], [], []],
    'app_trajet_controller_back_show' => [['id'], ['_controller' => 'App\\Controller\\TrajetControllerBackController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/trajet/controller/back']], [], [], []],
    'app_trajet_controller_back_edit' => [['id'], ['_controller' => 'App\\Controller\\TrajetControllerBackController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/trajet/controller/back']], [], [], []],
    'app_trajet_controller_back_delete' => [['id'], ['_controller' => 'App\\Controller\\TrajetControllerBackController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/trajet/controller/back']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'app_logement_delete' => [['id'], ['_controller' => 'App\\Controller\\LogementController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/logement']], [], [], []],
    'deleteSelected' => [[], ['_controller' => 'App\\Controller\\LogementController::deleteSelected'], [], [['text', '/logement/back/delete-selected']], [], [], []],
];
