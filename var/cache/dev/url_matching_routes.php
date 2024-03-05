<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/activite' => [
            [['_route' => 'app_activite', '_controller' => 'App\\Controller\\ActiviteController::index'], null, null, null, false, false, null],
            [['_route' => 'app_activitee_index', '_controller' => 'App\\Controller\\ActiviteeController::index'], null, ['GET' => 0], null, false, false, null],
        ],
        '/activitee/back' => [[['_route' => 'app_activitee_back_index', '_controller' => 'App\\Controller\\ActiviteeBackController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/activitee/back/new' => [[['_route' => 'app_activitee_back_new', '_controller' => 'App\\Controller\\ActiviteeBackController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/act' => [[['_route' => 'app_activitee_indexx', '_controller' => 'App\\Controller\\ActiviteeController::indexx'], null, ['GET' => 0], null, false, false, null]],
        '/new' => [[['_route' => 'app_activitee_new', '_controller' => 'App\\Controller\\ActiviteeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/profiledition' => [[['_route' => 'admin_account_edit', '_controller' => 'App\\Controller\\AdminAccountController::edit'], null, null, null, false, false, null]],
        '/admin/profil' => [[['_route' => 'admin_account_index', '_controller' => 'App\\Controller\\AdminAccountController::index'], null, null, null, false, false, null]],
        '/admin/tableau-de-bord' => [[['_route' => 'admin_dashboard_index', '_controller' => 'App\\Controller\\AdminDashboardController::index'], null, null, null, false, false, null]],
        '/admin/parametre' => [[['_route' => 'admin_parameter_index', '_controller' => 'App\\Controller\\AdminParameterController::edit'], null, null, null, false, false, null]],
        '/admin/utilisateur' => [[['_route' => 'admin_user_index', '_controller' => 'App\\Controller\\AdminUserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/utilisateur/add' => [[['_route' => 'admin_user_add', '_controller' => 'App\\Controller\\AdminUserController::add'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/categorie/back/c' => [[['_route' => 'app_categorie_back_c_index', '_controller' => 'App\\Controller\\CategorieBackCController::index'], null, ['GET' => 0], null, true, false, null]],
        '/categorie/back/c/new' => [[['_route' => 'app_categorie_back_c_new', '_controller' => 'App\\Controller\\CategorieBackCController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/equipement/back' => [[['_route' => 'app_equipement_back_index', '_controller' => 'App\\Controller\\EquipementBackController::index'], null, ['GET' => 0], null, true, false, null]],
        '/equipement/back/new' => [[['_route' => 'app_equipement_back_new', '_controller' => 'App\\Controller\\EquipementBackController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/equipement/new' => [[['_route' => 'app_equipement_new', '_controller' => 'App\\Controller\\EquipementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/export/excel' => [[['_route' => 'export_excel', '_controller' => 'App\\Controller\\ExelController::exportExcel'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home_index', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/logement/back' => [[['_route' => 'app_logement_back_index', '_controller' => 'App\\Controller\\LogementBackController::index'], null, ['GET' => 0], null, true, false, null]],
        '/logement/back/new' => [[['_route' => 'app_logement_back_new', '_controller' => 'App\\Controller\\LogementBackController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/logement/new' => [[['_route' => 'app_logement_new', '_controller' => 'App\\Controller\\LogementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/logement/mylogement' => [[['_route' => 'app_logement_mylist', '_controller' => 'App\\Controller\\LogementController::Rechercheavisbyclient'], null, null, null, false, false, null]],
        '/moyen/transport/back' => [[['_route' => 'app_moyen_transport_back_index', '_controller' => 'App\\Controller\\MoyenTransportBackController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/moyen/transport/back/new' => [[['_route' => 'app_moyen_transport_back_new', '_controller' => 'App\\Controller\\MoyenTransportBackController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/moyen/transport' => [[['_route' => 'app_moyen_transport_index', '_controller' => 'App\\Controller\\MoyenTransportController::index'], null, ['GET' => 0], null, true, false, null]],
        '/moyen/transport/new' => [[['_route' => 'app_moyen_transport_new', '_controller' => 'App\\Controller\\MoyenTransportController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/plat/platfront' => [[['_route' => 'app_plat_indexfront', '_controller' => 'App\\Controller\\PlatController::indexFront'], null, null, null, false, false, null]],
        '/plat/new' => [[['_route' => 'app_plat_new', '_controller' => 'App\\Controller\\PlatController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reclamation/back' => [[['_route' => 'app_reclamation_back_index', '_controller' => 'App\\Controller\\ReclamationBackController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/reclamation/back/new' => [[['_route' => 'app_reclamation_back_new', '_controller' => 'App\\Controller\\ReclamationBackController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reclamation/new' => [[['_route' => 'app_reclamation_new', '_controller' => 'App\\Controller\\ReclamationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/reponse/back' => [[['_route' => 'app_reponse_back_index', '_controller' => 'App\\Controller\\ReponseBackController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reponse/back/new' => [[['_route' => 'app_reponse_back_new', '_controller' => 'App\\Controller\\ReponseBackController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reponse/new' => [[['_route' => 'app_reponse_new', '_controller' => 'App\\Controller\\ReponseController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/restaurant/new' => [[['_route' => 'app_restaurant_new', '_controller' => 'App\\Controller\\RestaurantController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/connexion/succes' => [[['_route' => 'login_success', '_controller' => 'App\\Controller\\SecurityController::onLoginSuccess'], null, null, null, false, false, null]],
        '/trajet/new' => [[['_route' => 'app_trajet_new', '_controller' => 'App\\Controller\\TrajetController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/trajet/controller/back' => [[['_route' => 'app_trajet_controller_back_index', '_controller' => 'App\\Controller\\TrajetControllerBackController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/trajet/controller/back/new' => [[['_route' => 'app_trajet_controller_back_new', '_controller' => 'App\\Controller\\TrajetControllerBackController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/([^/]++)(?'
                    .'|/(?'
                        .'|desc(*:126)'
                        .'|edit(*:138)'
                    .')'
                    .'|(*:147)'
                .')'
                .'|/show_in_map/([^/]++)(?'
                    .'|(*:180)'
                .')'
                .'|/generate_qr_code/([^/]++)(*:215)'
                .'|/ad(?'
                    .'|min/utilisateur(?'
                        .'|/([^/]++)(?'
                            .'|(*:259)'
                            .'|/edit(*:272)'
                        .')'
                        .'|([^/]++)/suppression(*:301)'
                    .')'
                    .'|d\\-to\\-favorites/([^/]++)(*:335)'
                .')'
                .'|/back(*:349)'
                .'|/c(?'
                    .'|ategorie/back/c/([^/]++)(?'
                        .'|(*:389)'
                        .'|/edit(*:402)'
                        .'|(*:410)'
                    .')'
                    .'|hange\\-language(*:434)'
                    .'|onnexion(*:450)'
                .')'
                .'|/equipement(?'
                    .'|/(?'
                        .'|back/([^/]++)(?'
                            .'|(*:493)'
                            .'|/edit(*:506)'
                            .'|(*:514)'
                        .')'
                        .'|([^/]++)(?'
                            .'|/edit(*:539)'
                            .'|(*:547)'
                            .'|(*:555)'
                        .')'
                    .')'
                    .'|(*:565)'
                .')'
                .'|/logement(?'
                    .'|/(?'
                        .'|back/([^/]++)(?'
                            .'|/(?'
                                .'|modifier\\-etat(*:624)'
                                .'|refuser\\-etat(*:645)'
                                .'|edit(*:657)'
                            .')'
                            .'|(*:666)'
                        .')'
                        .'|show/([^/]++)(*:688)'
                        .'|([^/]++)/edit(*:709)'
                        .'|show_in_map/([^/]++)(*:737)'
                        .'|([^/]++)(*:753)'
                        .'|back/delete\\-selected(*:782)'
                    .')'
                    .'|(*:791)'
                .')'
                .'|/moyen/transport/(?'
                    .'|back/([^/]++)(?'
                        .'|(*:836)'
                        .'|/(?'
                            .'|edit(*:852)'
                            .'|refuser\\-valide(*:875)'
                            .'|modifier\\-valide(*:899)'
                        .')'
                        .'|(*:908)'
                    .')'
                    .'|([^/]++)(?'
                        .'|(*:928)'
                        .'|/(?'
                            .'|edit(*:944)'
                            .'|trajects(*:960)'
                        .')'
                        .'|(*:969)'
                    .')'
                    .'|show_in_map/([^/]++)(*:998)'
                .')'
                .'|/plat(?'
                    .'|(*:1015)'
                    .'|/([^/]++)(?'
                        .'|(*:1036)'
                        .'|/edit(*:1050)'
                        .'|(*:1059)'
                    .')'
                .')'
                .'|/re(?'
                    .'|clamation(?'
                        .'|/(?'
                            .'|back/([^/]++)(?'
                                .'|/(?'
                                    .'|repondre(*:1120)'
                                    .'|show_response(*:1142)'
                                    .'|edit(*:1155)'
                                .')'
                                .'|(*:1165)'
                            .')'
                            .'|([^/]++)(?'
                                .'|(*:1186)'
                                .'|/edit(*:1200)'
                                .'|(*:1209)'
                            .')'
                        .')'
                        .'|(*:1220)'
                    .')'
                    .'|ponse(?'
                        .'|/(?'
                            .'|back/([^/]++)(?'
                                .'|(*:1258)'
                                .'|/edit(*:1272)'
                                .'|(*:1281)'
                            .')'
                            .'|([^/]++)(?'
                                .'|(*:1302)'
                                .'|/edit(*:1316)'
                                .'|(*:1325)'
                            .')'
                        .')'
                        .'|(*:1336)'
                    .')'
                    .'|s(?'
                        .'|et\\-password(?'
                            .'|(*:1365)'
                            .'|/reset(?:/([^/]++))?(*:1394)'
                        .')'
                        .'|taurant(?'
                            .'|(*:1414)'
                            .'|front(?'
                                .'|(*:1431)'
                                .'|/([^/]++)(*:1449)'
                                .'|favoris(*:1465)'
                            .')'
                            .'|/([^/]++)(?'
                                .'|(*:1487)'
                                .'|/edit(*:1501)'
                                .'|(*:1510)'
                            .')'
                        .')'
                    .')'
                    .'|move\\-from\\-favorites/([^/]++)(*:1552)'
                .')'
                .'|/inscription(*:1574)'
                .'|/favorites(*:1593)'
                .'|/deconnexion(*:1614)'
                .'|/trajet(?'
                    .'|(*:1633)'
                    .'|/(?'
                        .'|([^/]++)(?'
                            .'|(*:1657)'
                            .'|/edit(*:1671)'
                            .'|(*:1680)'
                        .')'
                        .'|controller/back/([^/]++)(?'
                            .'|(*:1717)'
                            .'|/edit(*:1731)'
                            .'|(*:1740)'
                        .')'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:1783)'
                    .'|wdt/([^/]++)(*:1804)'
                    .'|profiler(?'
                        .'|(*:1824)'
                        .'|/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:1863)'
                                .'|router(*:1878)'
                                .'|exception(?'
                                    .'|(*:1899)'
                                    .'|\\.css(*:1913)'
                                .')'
                            .')'
                            .'|(*:1924)'
                        .')'
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
        126 => [[['_route' => 'app_activitee_desc', '_controller' => 'App\\Controller\\ActiviteeController::descriptif'], ['id'], ['GET' => 0], null, false, false, null]],
        138 => [[['_route' => 'app_activitee_edit', '_controller' => 'App\\Controller\\ActiviteeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        147 => [[['_route' => 'app_activitee_delete', '_controller' => 'App\\Controller\\ActiviteeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        180 => [
            [['_route' => 'app_evenement_map', '_controller' => 'App\\Controller\\ActiviteeController::Map'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_restaurant_map', '_controller' => 'App\\Controller\\RestaurantController::Map'], ['id'], ['GET' => 0], null, false, true, null],
        ],
        215 => [[['_route' => 'generate_qr_code', '_controller' => 'App\\Controller\\ActiviteeController::generateQrCode'], ['id'], ['POST' => 0], null, false, true, null]],
        259 => [[['_route' => 'admin_user_show', '_controller' => 'App\\Controller\\AdminUserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        272 => [[['_route' => 'admin_user_edit', '_controller' => 'App\\Controller\\AdminUserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        301 => [[['_route' => 'admin_user_delete', '_controller' => 'App\\Controller\\AdminUserController::delete'], ['id'], null, null, false, false, null]],
        335 => [[['_route' => 'add_to_favorites', '_controller' => 'App\\Controller\\RestaurantController::addToFavorites'], ['id'], null, null, false, true, null]],
        349 => [[['_route' => 'app_back', '_controller' => 'App\\Controller\\BackController::index'], [], null, null, false, false, null]],
        389 => [[['_route' => 'app_categorie_back_c_show', '_controller' => 'App\\Controller\\CategorieBackCController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        402 => [[['_route' => 'app_categorie_back_c_edit', '_controller' => 'App\\Controller\\CategorieBackCController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        410 => [[['_route' => 'app_categorie_back_c_delete', '_controller' => 'App\\Controller\\CategorieBackCController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        434 => [[['_route' => 'change_language', '_controller' => 'App\\Controller\\RestaurantController::changeLanguage'], [], null, null, false, false, null]],
        450 => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], [], null, null, false, false, null]],
        493 => [[['_route' => 'app_equipement_back_show', '_controller' => 'App\\Controller\\EquipementBackController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        506 => [[['_route' => 'app_equipement_back_edit', '_controller' => 'App\\Controller\\EquipementBackController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        514 => [[['_route' => 'app_equipement_back_delete', '_controller' => 'App\\Controller\\EquipementBackController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        539 => [[['_route' => 'app_equipement_edit', '_controller' => 'App\\Controller\\EquipementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        547 => [[['_route' => 'app_equipement_delete', '_controller' => 'App\\Controller\\EquipementController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        555 => [[['_route' => 'app_equipement_show', '_controller' => 'App\\Controller\\EquipementController::showlogement'], ['equipementId'], ['GET' => 0], null, false, true, null]],
        565 => [[['_route' => 'app_equipement_index', '_controller' => 'App\\Controller\\EquipementController::index'], [], ['GET' => 0], null, true, false, null]],
        624 => [[['_route' => 'app_modifier_etat_logement', '_controller' => 'App\\Controller\\LogementBackController::modifierEtatLogement'], ['id'], null, null, false, false, null]],
        645 => [[['_route' => 'app_refuser_etat_logement', '_controller' => 'App\\Controller\\LogementBackController::refuserEtatLogement'], ['id'], null, null, false, false, null]],
        657 => [[['_route' => 'app_logement_back_edit', '_controller' => 'App\\Controller\\LogementBackController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        666 => [
            [['_route' => 'app_logement_back_show', '_controller' => 'App\\Controller\\LogementBackController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_logement_back_delete', '_controller' => 'App\\Controller\\LogementBackController::delete'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        688 => [[['_route' => 'app_logement_show', '_controller' => 'App\\Controller\\LogementController::show'], ['id'], ['GET' => 0], null, true, true, null]],
        709 => [[['_route' => 'app_logement_edit', '_controller' => 'App\\Controller\\LogementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        737 => [[['_route' => 'app_logement_map', '_controller' => 'App\\Controller\\LogementController::Map'], ['id'], ['GET' => 0], null, false, true, null]],
        753 => [[['_route' => 'app_logement_delete', '_controller' => 'App\\Controller\\LogementController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        782 => [[['_route' => 'deleteSelected', '_controller' => 'App\\Controller\\LogementController::deleteSelected'], [], ['POST' => 0], null, false, false, null]],
        791 => [[['_route' => 'app_logement_index', '_controller' => 'App\\Controller\\LogementController::index'], [], ['GET' => 0], null, true, false, null]],
        836 => [[['_route' => 'app_moyen_transport_back_show', '_controller' => 'App\\Controller\\MoyenTransportBackController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        852 => [[['_route' => 'app_moyen_transport_back_edit', '_controller' => 'App\\Controller\\MoyenTransportBackController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        875 => [[['_route' => 'app_refuser_moyen_transport', '_controller' => 'App\\Controller\\MoyenTransportBackController::refuserEtatLogement'], ['id'], null, null, false, false, null]],
        899 => [[['_route' => 'app_valider_moyen_transport', '_controller' => 'App\\Controller\\MoyenTransportBackController::modifierEtatLogement'], ['id'], null, null, false, false, null]],
        908 => [[['_route' => 'app_moyen_transport_back_delete', '_controller' => 'App\\Controller\\MoyenTransportBackController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        928 => [[['_route' => 'app_moyen_transport_show', '_controller' => 'App\\Controller\\MoyenTransportController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        944 => [[['_route' => 'app_moyen_transport_edit', '_controller' => 'App\\Controller\\MoyenTransportController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        960 => [[['_route' => 'app_trajects_for_moyen_transport', '_controller' => 'App\\Controller\\MoyenTransportController::trajectsForMoyenTransport'], ['id'], ['GET' => 0], null, false, false, null]],
        969 => [[['_route' => 'app_moyen_transport_delete', '_controller' => 'App\\Controller\\MoyenTransportController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        998 => [[['_route' => 'app_moyen_transport_map', '_controller' => 'App\\Controller\\MoyenTransportController::Map'], ['id'], ['GET' => 0], null, false, true, null]],
        1015 => [[['_route' => 'app_plat_index', '_controller' => 'App\\Controller\\PlatController::index'], [], ['GET' => 0], null, true, false, null]],
        1036 => [[['_route' => 'app_plat_show', '_controller' => 'App\\Controller\\PlatController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1050 => [[['_route' => 'app_plat_edit', '_controller' => 'App\\Controller\\PlatController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1059 => [[['_route' => 'app_plat_delete', '_controller' => 'App\\Controller\\PlatController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1120 => [[['_route' => 'app_reclamation_back_repondre', '_controller' => 'App\\Controller\\ReclamationBackController::repondre'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1142 => [[['_route' => 'app_reclamation_back_show_response', '_controller' => 'App\\Controller\\ReclamationBackController::showResponse'], ['id'], ['GET' => 0], null, false, false, null]],
        1155 => [[['_route' => 'app_reclamation_back_edit', '_controller' => 'App\\Controller\\ReclamationBackController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1165 => [
            [['_route' => 'app_reclamation_back_show', '_controller' => 'App\\Controller\\ReclamationBackController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_reclamation_back_delete', '_controller' => 'App\\Controller\\ReclamationBackController::delete'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        1186 => [[['_route' => 'app_reclamation_show', '_controller' => 'App\\Controller\\ReclamationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1200 => [[['_route' => 'app_reclamation_edit', '_controller' => 'App\\Controller\\ReclamationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1209 => [[['_route' => 'app_reclamation_delete', '_controller' => 'App\\Controller\\ReclamationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1220 => [[['_route' => 'app_reclamation_index', '_controller' => 'App\\Controller\\ReclamationController::index'], [], ['GET' => 0, 'POST' => 1], null, true, false, null]],
        1258 => [[['_route' => 'app_reponse_back_show', '_controller' => 'App\\Controller\\ReponseBackController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1272 => [[['_route' => 'app_reponse_back_edit', '_controller' => 'App\\Controller\\ReponseBackController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1281 => [[['_route' => 'app_reponse_back_delete', '_controller' => 'App\\Controller\\ReponseBackController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1302 => [[['_route' => 'app_reponse_show', '_controller' => 'App\\Controller\\ReponseController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1316 => [[['_route' => 'app_reponse_edit', '_controller' => 'App\\Controller\\ReponseController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1325 => [[['_route' => 'app_reponse_delete', '_controller' => 'App\\Controller\\ReponseController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1336 => [[['_route' => 'app_reponse_index', '_controller' => 'App\\Controller\\ReponseController::index'], [], ['GET' => 0], null, true, false, null]],
        1365 => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], [], null, null, false, false, null]],
        1394 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        1414 => [[['_route' => 'app_restaurant_index', '_controller' => 'App\\Controller\\RestaurantController::index'], [], null, null, false, false, null]],
        1431 => [[['_route' => 'app_restaurant_indexfront', '_controller' => 'App\\Controller\\RestaurantController::indexFront'], [], null, null, false, false, null]],
        1449 => [[['_route' => 'app_restaurant_showfront', '_controller' => 'App\\Controller\\RestaurantController::showfront'], ['id'], ['GET' => 0], null, false, true, null]],
        1465 => [[['_route' => 'app_restaurant_favoris', '_controller' => 'App\\Controller\\RestaurantController::indexFrontfavoris'], [], null, null, false, false, null]],
        1487 => [[['_route' => 'app_restaurant_show', '_controller' => 'App\\Controller\\RestaurantController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1501 => [[['_route' => 'app_restaurant_edit', '_controller' => 'App\\Controller\\RestaurantController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1510 => [[['_route' => 'app_restaurant_delete', '_controller' => 'App\\Controller\\RestaurantController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1552 => [[['_route' => 'remove-from_favorites', '_controller' => 'App\\Controller\\RestaurantController::RemoveFromFavorites'], ['id'], null, null, false, true, null]],
        1574 => [[['_route' => 'registration', '_controller' => 'App\\Controller\\RegistrationController::register'], [], null, null, false, false, null]],
        1593 => [[['_route' => 'favorites', '_controller' => 'App\\Controller\\RestaurantController::favorites'], [], null, null, false, false, null]],
        1614 => [[['_route' => 'logout', '_controller' => 'App\\Controller\\SecurityController::logout'], [], null, null, false, false, null]],
        1633 => [[['_route' => 'app_trajet_index', '_controller' => 'App\\Controller\\TrajetController::index'], [], ['GET' => 0], null, true, false, null]],
        1657 => [[['_route' => 'app_trajet_show', '_controller' => 'App\\Controller\\TrajetController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1671 => [[['_route' => 'app_trajet_edit', '_controller' => 'App\\Controller\\TrajetController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1680 => [[['_route' => 'app_trajet_delete', '_controller' => 'App\\Controller\\TrajetController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1717 => [[['_route' => 'app_trajet_controller_back_show', '_controller' => 'App\\Controller\\TrajetControllerBackController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1731 => [[['_route' => 'app_trajet_controller_back_edit', '_controller' => 'App\\Controller\\TrajetControllerBackController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1740 => [[['_route' => 'app_trajet_controller_back_delete', '_controller' => 'App\\Controller\\TrajetControllerBackController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1783 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        1804 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        1824 => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], [], null, null, true, false, null]],
        1863 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        1878 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        1899 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        1913 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        1924 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
