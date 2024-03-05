<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/activite' => [[['_route' => 'app_activite', '_controller' => 'App\\Controller\\ActiviteController::index'], null, null, null, false, false, null]],
        '/activitee/back' => [[['_route' => 'app_activitee_back_index', '_controller' => 'App\\Controller\\ActiviteeBackController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/activitee/back/new' => [[['_route' => 'app_activitee_back_new', '_controller' => 'App\\Controller\\ActiviteeBackController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/activitee' => [[['_route' => 'app_activitee_index', '_controller' => 'App\\Controller\\ActiviteeController::index'], null, ['GET' => 0], null, false, false, null]],
        '/act' => [[['_route' => 'app_activitee_indexx', '_controller' => 'App\\Controller\\ActiviteeController::indexx'], null, ['GET' => 0], null, false, false, null]],
        '/new' => [[['_route' => 'app_activitee_new', '_controller' => 'App\\Controller\\ActiviteeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/profiledition' => [[['_route' => 'admin_account_edit', '_controller' => 'App\\Controller\\AdminAccountController::edit'], null, null, null, false, false, null]],
        '/admin/profil' => [[['_route' => 'admin_account_index', '_controller' => 'App\\Controller\\AdminAccountController::index'], null, null, null, false, false, null]],
        '/admin/tableau-de-bord' => [[['_route' => 'admin_dashboard_index', '_controller' => 'App\\Controller\\AdminDashboardController::index'], null, null, null, false, false, null]],
        '/admin/parametre' => [[['_route' => 'admin_parameter_index', '_controller' => 'App\\Controller\\AdminParameterController::edit'], null, null, null, false, false, null]],
        '/admin/utilisateur' => [[['_route' => 'admin_user_index', '_controller' => 'App\\Controller\\AdminUserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/utilisateur/add' => [[['_route' => 'admin_user_add', '_controller' => 'App\\Controller\\AdminUserController::add'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/back' => [[['_route' => 'app_back', '_controller' => 'App\\Controller\\BackController::index'], null, null, null, false, false, null]],
        '/categorie/back/c' => [[['_route' => 'app_categorie_back_c_index', '_controller' => 'App\\Controller\\CategorieBackCController::index'], null, ['GET' => 0], null, true, false, null]],
        '/categorie/back/c/new' => [[['_route' => 'app_categorie_back_c_new', '_controller' => 'App\\Controller\\CategorieBackCController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/equipement/back' => [[['_route' => 'app_equipement_back_index', '_controller' => 'App\\Controller\\EquipementBackController::index'], null, ['GET' => 0], null, true, false, null]],
        '/equipement/back/new' => [[['_route' => 'app_equipement_back_new', '_controller' => 'App\\Controller\\EquipementBackController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/equipement' => [[['_route' => 'app_equipement_index', '_controller' => 'App\\Controller\\EquipementController::index'], null, ['GET' => 0], null, true, false, null]],
        '/equipement/new' => [[['_route' => 'app_equipement_new', '_controller' => 'App\\Controller\\EquipementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/export/excel' => [[['_route' => 'export_excel', '_controller' => 'App\\Controller\\ExelController::exportExcel'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home_index', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/logement/back' => [[['_route' => 'app_logement_back_index', '_controller' => 'App\\Controller\\LogementBackController::index'], null, ['GET' => 0], null, true, false, null]],
        '/logement/back/new' => [[['_route' => 'app_logement_back_new', '_controller' => 'App\\Controller\\LogementBackController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/logement' => [[['_route' => 'app_logement_index', '_controller' => 'App\\Controller\\LogementController::index'], null, ['GET' => 0], null, true, false, null]],
        '/logement/new' => [[['_route' => 'app_logement_new', '_controller' => 'App\\Controller\\LogementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/logement/mylogement' => [[['_route' => 'app_logement_mylist', '_controller' => 'App\\Controller\\LogementController::Rechercheavisbyclient'], null, null, null, false, false, null]],
        '/moyen/transport/back' => [[['_route' => 'app_moyen_transport_back_index', '_controller' => 'App\\Controller\\MoyenTransportBackController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/moyen/transport/back/new' => [[['_route' => 'app_moyen_transport_back_new', '_controller' => 'App\\Controller\\MoyenTransportBackController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/moyen/transport' => [[['_route' => 'app_moyen_transport_index', '_controller' => 'App\\Controller\\MoyenTransportController::index'], null, ['GET' => 0], null, true, false, null]],
        '/moyen/transport/new' => [[['_route' => 'app_moyen_transport_new', '_controller' => 'App\\Controller\\MoyenTransportController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/plat' => [[['_route' => 'app_plat_index', '_controller' => 'App\\Controller\\PlatController::index'], null, ['GET' => 0], null, true, false, null]],
        '/plat/platfront' => [[['_route' => 'app_plat_indexfront', '_controller' => 'App\\Controller\\PlatController::indexFront'], null, null, null, false, false, null]],
        '/plat/new' => [[['_route' => 'app_plat_new', '_controller' => 'App\\Controller\\PlatController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reclamation/back' => [[['_route' => 'app_reclamation_back_index', '_controller' => 'App\\Controller\\ReclamationBackController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/reclamation/back/new' => [[['_route' => 'app_reclamation_back_new', '_controller' => 'App\\Controller\\ReclamationBackController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reclamation' => [[['_route' => 'app_reclamation_index', '_controller' => 'App\\Controller\\ReclamationController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/reclamation/new' => [[['_route' => 'app_reclamation_new', '_controller' => 'App\\Controller\\ReclamationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/inscription' => [[['_route' => 'registration', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/reponse/back' => [[['_route' => 'app_reponse_back_index', '_controller' => 'App\\Controller\\ReponseBackController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reponse/back/new' => [[['_route' => 'app_reponse_back_new', '_controller' => 'App\\Controller\\ReponseBackController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reponse' => [[['_route' => 'app_reponse_index', '_controller' => 'App\\Controller\\ReponseController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reponse/new' => [[['_route' => 'app_reponse_new', '_controller' => 'App\\Controller\\ReponseController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/restaurant' => [[['_route' => 'app_restaurant_index', '_controller' => 'App\\Controller\\RestaurantController::index'], null, null, null, false, false, null]],
        '/restaurantfront' => [[['_route' => 'app_restaurant_indexfront', '_controller' => 'App\\Controller\\RestaurantController::indexFront'], null, null, null, false, false, null]],
        '/restaurant/new' => [[['_route' => 'app_restaurant_new', '_controller' => 'App\\Controller\\RestaurantController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/change-language' => [[['_route' => 'change_language', '_controller' => 'App\\Controller\\RestaurantController::changeLanguage'], null, null, null, false, false, null]],
        '/favorites' => [[['_route' => 'favorites', '_controller' => 'App\\Controller\\RestaurantController::favorites'], null, null, null, false, false, null]],
        '/restaurantfrontfavoris' => [[['_route' => 'app_restaurant_favoris', '_controller' => 'App\\Controller\\RestaurantController::indexFrontfavoris'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/connexion/succes' => [[['_route' => 'login_success', '_controller' => 'App\\Controller\\SecurityController::onLoginSuccess'], null, null, null, false, false, null]],
        '/trajet' => [[['_route' => 'app_trajet_index', '_controller' => 'App\\Controller\\TrajetController::index'], null, ['GET' => 0], null, true, false, null]],
        '/trajet/new' => [[['_route' => 'app_trajet_new', '_controller' => 'App\\Controller\\TrajetController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/trajet/controller/back' => [[['_route' => 'app_trajet_controller_back_index', '_controller' => 'App\\Controller\\TrajetControllerBackController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/trajet/controller/back/new' => [[['_route' => 'app_trajet_controller_back_new', '_controller' => 'App\\Controller\\TrajetControllerBackController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/activitee/back/([^/]++)(?'
                    .'|(*:34)'
                    .'|/(?'
                        .'|modifier\\-etat(*:59)'
                        .'|refuser\\-etat(*:79)'
                        .'|edit(*:90)'
                    .')'
                    .'|(*:98)'
                .')'
                .'|/([^/]++)/(?'
                    .'|desc(*:123)'
                    .'|edit(*:135)'
                .')'
                .'|/delete/([^/]++)(*:160)'
                .'|/show_in_map/([^/]++)(?'
                    .'|(*:192)'
                .')'
                .'|/generate_qr_code/([^/]++)(*:227)'
                .'|/ad(?'
                    .'|min/utilisateur(?'
                        .'|/([^/]++)(?'
                            .'|(*:271)'
                            .'|/edit(*:284)'
                        .')'
                        .'|([^/]++)/suppression(*:313)'
                    .')'
                    .'|d\\-to\\-favorites/([^/]++)(*:347)'
                .')'
                .'|/categorie/back/c/([^/]++)(?'
                    .'|(*:385)'
                    .'|/edit(*:398)'
                    .'|(*:406)'
                .')'
                .'|/equipement/(?'
                    .'|back/([^/]++)(?'
                        .'|(*:446)'
                        .'|/edit(*:459)'
                        .'|(*:467)'
                    .')'
                    .'|([^/]++)(?'
                        .'|/edit(*:492)'
                        .'|(*:500)'
                        .'|(*:508)'
                    .')'
                .')'
                .'|/logement/(?'
                    .'|back/([^/]++)(?'
                        .'|/(?'
                            .'|modifier\\-etat(*:565)'
                            .'|refuser\\-etat(*:586)'
                            .'|edit(*:598)'
                        .')'
                        .'|(*:607)'
                    .')'
                    .'|show/([^/]++)(*:629)'
                    .'|([^/]++)/edit(*:650)'
                    .'|show_in_map/([^/]++)(*:678)'
                    .'|([^/]++)(*:694)'
                    .'|back/delete\\-selected(*:723)'
                .')'
                .'|/moyen/transport/(?'
                    .'|back/([^/]++)(?'
                        .'|(*:768)'
                        .'|/(?'
                            .'|edit(*:784)'
                            .'|refuser\\-valide(*:807)'
                            .'|modifier\\-valide(*:831)'
                        .')'
                        .'|(*:840)'
                    .')'
                    .'|([^/]++)(?'
                        .'|(*:860)'
                        .'|/(?'
                            .'|edit(*:876)'
                            .'|trajects(*:892)'
                        .')'
                        .'|(*:901)'
                    .')'
                    .'|show_in_map/([^/]++)(*:930)'
                .')'
                .'|/plat/([^/]++)(?'
                    .'|(*:956)'
                    .'|/edit(*:969)'
                    .'|(*:977)'
                .')'
                .'|/re(?'
                    .'|clamation/(?'
                        .'|back/([^/]++)(?'
                            .'|/(?'
                                .'|repondre(*:1033)'
                                .'|show_response(*:1055)'
                                .'|edit(*:1068)'
                            .')'
                            .'|(*:1078)'
                        .')'
                        .'|([^/]++)(?'
                            .'|(*:1099)'
                            .'|/edit(*:1113)'
                            .'|(*:1122)'
                        .')'
                    .')'
                    .'|ponse/(?'
                        .'|back/([^/]++)(?'
                            .'|(*:1158)'
                            .'|/edit(*:1172)'
                            .'|(*:1181)'
                        .')'
                        .'|([^/]++)(?'
                            .'|(*:1202)'
                            .'|/edit(*:1216)'
                            .'|(*:1225)'
                        .')'
                    .')'
                    .'|s(?'
                        .'|et\\-password/reset(?:/([^/]++))?(*:1272)'
                        .'|taurant(?'
                            .'|/([^/]++)(?'
                                .'|(*:1303)'
                                .'|/edit(*:1317)'
                                .'|(*:1326)'
                            .')'
                            .'|front/([^/]++)(*:1350)'
                        .')'
                    .')'
                    .'|move\\-from\\-favorites/([^/]++)(*:1391)'
                .')'
                .'|/trajet/(?'
                    .'|([^/]++)(?'
                        .'|(*:1423)'
                        .'|/edit(*:1437)'
                        .'|(*:1446)'
                    .')'
                    .'|controller/back/([^/]++)(?'
                        .'|(*:1483)'
                        .'|/edit(*:1497)'
                        .'|(*:1506)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:1548)'
                    .'|wdt/([^/]++)(*:1569)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:1616)'
                            .'|router(*:1631)'
                            .'|exception(?'
                                .'|(*:1652)'
                                .'|\\.css(*:1666)'
                            .')'
                        .')'
                        .'|(*:1677)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        34 => [[['_route' => 'app_activitee_back_show', '_controller' => 'App\\Controller\\ActiviteeBackController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        59 => [[['_route' => 'app_modifier_etat_activite', '_controller' => 'App\\Controller\\ActiviteeBackController::modifierEtatActivite'], ['id'], null, null, false, false, null]],
        79 => [[['_route' => 'app_refuser_etat_activite', '_controller' => 'App\\Controller\\ActiviteeBackController::refuserEtatLogement'], ['id'], null, null, false, false, null]],
        90 => [[['_route' => 'app_activitee_back_edit', '_controller' => 'App\\Controller\\ActiviteeBackController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        98 => [[['_route' => 'app_activitee_back_delete', '_controller' => 'App\\Controller\\ActiviteeBackController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        123 => [[['_route' => 'app_activitee_desc', '_controller' => 'App\\Controller\\ActiviteeController::descriptif'], ['id'], ['GET' => 0], null, false, false, null]],
        135 => [[['_route' => 'app_activitee_edit', '_controller' => 'App\\Controller\\ActiviteeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        160 => [[['_route' => 'app_activitee_delete', '_controller' => 'App\\Controller\\ActiviteeController::deleteactivite'], ['id'], null, null, false, true, null]],
        192 => [
            [['_route' => 'app_evenement_map', '_controller' => 'App\\Controller\\ActiviteeController::Map'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_restaurant_map', '_controller' => 'App\\Controller\\RestaurantController::Map'], ['id'], ['GET' => 0], null, false, true, null],
        ],
        227 => [[['_route' => 'generate_qr_code', '_controller' => 'App\\Controller\\ActiviteeController::generateQrCode'], ['id'], ['POST' => 0], null, false, true, null]],
        271 => [[['_route' => 'admin_user_show', '_controller' => 'App\\Controller\\AdminUserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        284 => [[['_route' => 'admin_user_edit', '_controller' => 'App\\Controller\\AdminUserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        313 => [[['_route' => 'admin_user_delete', '_controller' => 'App\\Controller\\AdminUserController::delete'], ['id'], null, null, false, false, null]],
        347 => [[['_route' => 'add_to_favorites', '_controller' => 'App\\Controller\\RestaurantController::addToFavorites'], ['id'], null, null, false, true, null]],
        385 => [[['_route' => 'app_categorie_back_c_show', '_controller' => 'App\\Controller\\CategorieBackCController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        398 => [[['_route' => 'app_categorie_back_c_edit', '_controller' => 'App\\Controller\\CategorieBackCController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        406 => [[['_route' => 'app_categorie_back_c_delete', '_controller' => 'App\\Controller\\CategorieBackCController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        446 => [[['_route' => 'app_equipement_back_show', '_controller' => 'App\\Controller\\EquipementBackController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        459 => [[['_route' => 'app_equipement_back_edit', '_controller' => 'App\\Controller\\EquipementBackController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        467 => [[['_route' => 'app_equipement_back_delete', '_controller' => 'App\\Controller\\EquipementBackController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        492 => [[['_route' => 'app_equipement_edit', '_controller' => 'App\\Controller\\EquipementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        500 => [[['_route' => 'app_equipement_delete', '_controller' => 'App\\Controller\\EquipementController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        508 => [[['_route' => 'app_equipement_show', '_controller' => 'App\\Controller\\EquipementController::showlogement'], ['equipementId'], ['GET' => 0], null, false, true, null]],
        565 => [[['_route' => 'app_modifier_etat_logement', '_controller' => 'App\\Controller\\LogementBackController::modifierEtatLogement'], ['id'], null, null, false, false, null]],
        586 => [[['_route' => 'app_refuser_etat_logement', '_controller' => 'App\\Controller\\LogementBackController::refuserEtatLogement'], ['id'], null, null, false, false, null]],
        598 => [[['_route' => 'app_logement_back_edit', '_controller' => 'App\\Controller\\LogementBackController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        607 => [
            [['_route' => 'app_logement_back_show', '_controller' => 'App\\Controller\\LogementBackController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_logement_back_delete', '_controller' => 'App\\Controller\\LogementBackController::delete'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        629 => [[['_route' => 'app_logement_show', '_controller' => 'App\\Controller\\LogementController::show'], ['id'], ['GET' => 0], null, true, true, null]],
        650 => [[['_route' => 'app_logement_edit', '_controller' => 'App\\Controller\\LogementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        678 => [[['_route' => 'app_logement_map', '_controller' => 'App\\Controller\\LogementController::Map'], ['id'], ['GET' => 0], null, false, true, null]],
        694 => [[['_route' => 'app_logement_delete', '_controller' => 'App\\Controller\\LogementController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        723 => [[['_route' => 'deleteSelected', '_controller' => 'App\\Controller\\LogementController::deleteSelected'], [], ['POST' => 0], null, false, false, null]],
        768 => [[['_route' => 'app_moyen_transport_back_show', '_controller' => 'App\\Controller\\MoyenTransportBackController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        784 => [[['_route' => 'app_moyen_transport_back_edit', '_controller' => 'App\\Controller\\MoyenTransportBackController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        807 => [[['_route' => 'app_refuser_moyen_transport', '_controller' => 'App\\Controller\\MoyenTransportBackController::refuserEtatLogement'], ['id'], null, null, false, false, null]],
        831 => [[['_route' => 'app_valider_moyen_transport', '_controller' => 'App\\Controller\\MoyenTransportBackController::modifierEtatLogement'], ['id'], null, null, false, false, null]],
        840 => [[['_route' => 'app_moyen_transport_back_delete', '_controller' => 'App\\Controller\\MoyenTransportBackController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        860 => [[['_route' => 'app_moyen_transport_show', '_controller' => 'App\\Controller\\MoyenTransportController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        876 => [[['_route' => 'app_moyen_transport_edit', '_controller' => 'App\\Controller\\MoyenTransportController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        892 => [[['_route' => 'app_trajects_for_moyen_transport', '_controller' => 'App\\Controller\\MoyenTransportController::trajectsForMoyenTransport'], ['id'], ['GET' => 0], null, false, false, null]],
        901 => [[['_route' => 'app_moyen_transport_delete', '_controller' => 'App\\Controller\\MoyenTransportController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        930 => [[['_route' => 'app_moyen_transport_map', '_controller' => 'App\\Controller\\MoyenTransportController::Map'], ['id'], ['GET' => 0], null, false, true, null]],
        956 => [[['_route' => 'app_plat_show', '_controller' => 'App\\Controller\\PlatController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        969 => [[['_route' => 'app_plat_edit', '_controller' => 'App\\Controller\\PlatController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        977 => [[['_route' => 'app_plat_delete', '_controller' => 'App\\Controller\\PlatController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1033 => [[['_route' => 'app_reclamation_back_repondre', '_controller' => 'App\\Controller\\ReclamationBackController::repondre'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1055 => [[['_route' => 'app_reclamation_back_show_response', '_controller' => 'App\\Controller\\ReclamationBackController::showResponse'], ['id'], ['GET' => 0], null, false, false, null]],
        1068 => [[['_route' => 'app_reclamation_back_edit', '_controller' => 'App\\Controller\\ReclamationBackController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1078 => [
            [['_route' => 'app_reclamation_back_show', '_controller' => 'App\\Controller\\ReclamationBackController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_reclamation_back_delete', '_controller' => 'App\\Controller\\ReclamationBackController::delete'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        1099 => [[['_route' => 'app_reclamation_show', '_controller' => 'App\\Controller\\ReclamationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1113 => [[['_route' => 'app_reclamation_edit', '_controller' => 'App\\Controller\\ReclamationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1122 => [[['_route' => 'app_reclamation_delete', '_controller' => 'App\\Controller\\ReclamationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1158 => [[['_route' => 'app_reponse_back_show', '_controller' => 'App\\Controller\\ReponseBackController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1172 => [[['_route' => 'app_reponse_back_edit', '_controller' => 'App\\Controller\\ReponseBackController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1181 => [[['_route' => 'app_reponse_back_delete', '_controller' => 'App\\Controller\\ReponseBackController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1202 => [[['_route' => 'app_reponse_show', '_controller' => 'App\\Controller\\ReponseController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1216 => [[['_route' => 'app_reponse_edit', '_controller' => 'App\\Controller\\ReponseController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1225 => [[['_route' => 'app_reponse_delete', '_controller' => 'App\\Controller\\ReponseController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1272 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        1303 => [[['_route' => 'app_restaurant_show', '_controller' => 'App\\Controller\\RestaurantController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1317 => [[['_route' => 'app_restaurant_edit', '_controller' => 'App\\Controller\\RestaurantController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1326 => [[['_route' => 'app_restaurant_delete', '_controller' => 'App\\Controller\\RestaurantController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1350 => [[['_route' => 'app_restaurant_showfront', '_controller' => 'App\\Controller\\RestaurantController::showfront'], ['id'], ['GET' => 0], null, false, true, null]],
        1391 => [[['_route' => 'remove-from_favorites', '_controller' => 'App\\Controller\\RestaurantController::RemoveFromFavorites'], ['id'], null, null, false, true, null]],
        1423 => [[['_route' => 'app_trajet_show', '_controller' => 'App\\Controller\\TrajetController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1437 => [[['_route' => 'app_trajet_edit', '_controller' => 'App\\Controller\\TrajetController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1446 => [[['_route' => 'app_trajet_delete', '_controller' => 'App\\Controller\\TrajetController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1483 => [[['_route' => 'app_trajet_controller_back_show', '_controller' => 'App\\Controller\\TrajetControllerBackController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1497 => [[['_route' => 'app_trajet_controller_back_edit', '_controller' => 'App\\Controller\\TrajetControllerBackController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1506 => [[['_route' => 'app_trajet_controller_back_delete', '_controller' => 'App\\Controller\\TrajetControllerBackController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1548 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        1569 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        1616 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        1631 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        1652 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        1666 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        1677 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
