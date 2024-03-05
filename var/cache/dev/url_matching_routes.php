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
        '/export/excel' => [[['_route' => 'export_excel', '_controller' => 'App\\Controller\\ExelController::exportExcel'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home_index', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
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
                .'|/moyen/transport/(?'
                    .'|back/([^/]++)(?'
                        .'|(*:495)'
                        .'|/(?'
                            .'|edit(*:511)'
                            .'|refuser\\-valide(*:534)'
                            .'|modifier\\-valide(*:558)'
                        .')'
                        .'|(*:567)'
                    .')'
                    .'|([^/]++)(?'
                        .'|(*:587)'
                        .'|/(?'
                            .'|edit(*:603)'
                            .'|trajects(*:619)'
                        .')'
                        .'|(*:628)'
                    .')'
                    .'|show_in_map/([^/]++)(*:657)'
                .')'
                .'|/plat(?'
                    .'|(*:674)'
                    .'|/([^/]++)(?'
                        .'|(*:694)'
                        .'|/edit(*:707)'
                        .'|(*:715)'
                    .')'
                .')'
                .'|/re(?'
                    .'|clamation(?'
                        .'|/(?'
                            .'|back/([^/]++)(?'
                                .'|/(?'
                                    .'|repondre(*:775)'
                                    .'|show_response(*:796)'
                                    .'|edit(*:808)'
                                .')'
                                .'|(*:817)'
                            .')'
                            .'|([^/]++)(?'
                                .'|(*:837)'
                                .'|/edit(*:850)'
                                .'|(*:858)'
                            .')'
                        .')'
                        .'|(*:868)'
                    .')'
                    .'|ponse(?'
                        .'|/(?'
                            .'|back/([^/]++)(?'
                                .'|(*:905)'
                                .'|/edit(*:918)'
                                .'|(*:926)'
                            .')'
                            .'|([^/]++)(?'
                                .'|(*:946)'
                                .'|/edit(*:959)'
                                .'|(*:967)'
                            .')'
                        .')'
                        .'|(*:977)'
                    .')'
                    .'|s(?'
                        .'|et\\-password(?'
                            .'|(*:1005)'
                            .'|/reset(?:/([^/]++))?(*:1034)'
                        .')'
                        .'|taurant(?'
                            .'|(*:1054)'
                            .'|front(?'
                                .'|(*:1071)'
                                .'|/([^/]++)(*:1089)'
                                .'|favoris(*:1105)'
                            .')'
                            .'|/([^/]++)(?'
                                .'|(*:1127)'
                                .'|/edit(*:1141)'
                                .'|(*:1150)'
                            .')'
                        .')'
                    .')'
                    .'|move\\-from\\-favorites/([^/]++)(*:1192)'
                .')'
                .'|/inscription(*:1214)'
                .'|/favorites(*:1233)'
                .'|/deconnexion(*:1254)'
                .'|/trajet(?'
                    .'|(*:1273)'
                    .'|/(?'
                        .'|([^/]++)(?'
                            .'|(*:1297)'
                            .'|/edit(*:1311)'
                            .'|(*:1320)'
                        .')'
                        .'|controller/back/([^/]++)(?'
                            .'|(*:1357)'
                            .'|/edit(*:1371)'
                            .'|(*:1380)'
                        .')'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:1423)'
                    .'|wdt/([^/]++)(*:1444)'
                    .'|profiler(?'
                        .'|(*:1464)'
                        .'|/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:1503)'
                                .'|router(*:1518)'
                                .'|exception(?'
                                    .'|(*:1539)'
                                    .'|\\.css(*:1553)'
                                .')'
                            .')'
                            .'|(*:1564)'
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
        495 => [[['_route' => 'app_moyen_transport_back_show', '_controller' => 'App\\Controller\\MoyenTransportBackController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        511 => [[['_route' => 'app_moyen_transport_back_edit', '_controller' => 'App\\Controller\\MoyenTransportBackController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        534 => [[['_route' => 'app_refuser_moyen_transport', '_controller' => 'App\\Controller\\MoyenTransportBackController::refuserEtatLogement'], ['id'], null, null, false, false, null]],
        558 => [[['_route' => 'app_valider_moyen_transport', '_controller' => 'App\\Controller\\MoyenTransportBackController::modifierEtatLogement'], ['id'], null, null, false, false, null]],
        567 => [[['_route' => 'app_moyen_transport_back_delete', '_controller' => 'App\\Controller\\MoyenTransportBackController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        587 => [[['_route' => 'app_moyen_transport_show', '_controller' => 'App\\Controller\\MoyenTransportController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        603 => [[['_route' => 'app_moyen_transport_edit', '_controller' => 'App\\Controller\\MoyenTransportController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        619 => [[['_route' => 'app_trajects_for_moyen_transport', '_controller' => 'App\\Controller\\MoyenTransportController::trajectsForMoyenTransport'], ['id'], ['GET' => 0], null, false, false, null]],
        628 => [[['_route' => 'app_moyen_transport_delete', '_controller' => 'App\\Controller\\MoyenTransportController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        657 => [[['_route' => 'app_moyen_transport_map', '_controller' => 'App\\Controller\\MoyenTransportController::Map'], ['id'], ['GET' => 0], null, false, true, null]],
        674 => [[['_route' => 'app_plat_index', '_controller' => 'App\\Controller\\PlatController::index'], [], ['GET' => 0], null, true, false, null]],
        694 => [[['_route' => 'app_plat_show', '_controller' => 'App\\Controller\\PlatController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        707 => [[['_route' => 'app_plat_edit', '_controller' => 'App\\Controller\\PlatController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        715 => [[['_route' => 'app_plat_delete', '_controller' => 'App\\Controller\\PlatController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        775 => [[['_route' => 'app_reclamation_back_repondre', '_controller' => 'App\\Controller\\ReclamationBackController::repondre'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        796 => [[['_route' => 'app_reclamation_back_show_response', '_controller' => 'App\\Controller\\ReclamationBackController::showResponse'], ['id'], ['GET' => 0], null, false, false, null]],
        808 => [[['_route' => 'app_reclamation_back_edit', '_controller' => 'App\\Controller\\ReclamationBackController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        817 => [
            [['_route' => 'app_reclamation_back_show', '_controller' => 'App\\Controller\\ReclamationBackController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_reclamation_back_delete', '_controller' => 'App\\Controller\\ReclamationBackController::delete'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        837 => [[['_route' => 'app_reclamation_show', '_controller' => 'App\\Controller\\ReclamationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        850 => [[['_route' => 'app_reclamation_edit', '_controller' => 'App\\Controller\\ReclamationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        858 => [[['_route' => 'app_reclamation_delete', '_controller' => 'App\\Controller\\ReclamationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        868 => [[['_route' => 'app_reclamation_index', '_controller' => 'App\\Controller\\ReclamationController::index'], [], ['GET' => 0, 'POST' => 1], null, true, false, null]],
        905 => [[['_route' => 'app_reponse_back_show', '_controller' => 'App\\Controller\\ReponseBackController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        918 => [[['_route' => 'app_reponse_back_edit', '_controller' => 'App\\Controller\\ReponseBackController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        926 => [[['_route' => 'app_reponse_back_delete', '_controller' => 'App\\Controller\\ReponseBackController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        946 => [[['_route' => 'app_reponse_show', '_controller' => 'App\\Controller\\ReponseController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        959 => [[['_route' => 'app_reponse_edit', '_controller' => 'App\\Controller\\ReponseController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        967 => [[['_route' => 'app_reponse_delete', '_controller' => 'App\\Controller\\ReponseController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        977 => [[['_route' => 'app_reponse_index', '_controller' => 'App\\Controller\\ReponseController::index'], [], ['GET' => 0], null, true, false, null]],
        1005 => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], [], null, null, false, false, null]],
        1034 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        1054 => [[['_route' => 'app_restaurant_index', '_controller' => 'App\\Controller\\RestaurantController::index'], [], null, null, false, false, null]],
        1071 => [[['_route' => 'app_restaurant_indexfront', '_controller' => 'App\\Controller\\RestaurantController::indexFront'], [], null, null, false, false, null]],
        1089 => [[['_route' => 'app_restaurant_showfront', '_controller' => 'App\\Controller\\RestaurantController::showfront'], ['id'], ['GET' => 0], null, false, true, null]],
        1105 => [[['_route' => 'app_restaurant_favoris', '_controller' => 'App\\Controller\\RestaurantController::indexFrontfavoris'], [], null, null, false, false, null]],
        1127 => [[['_route' => 'app_restaurant_show', '_controller' => 'App\\Controller\\RestaurantController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1141 => [[['_route' => 'app_restaurant_edit', '_controller' => 'App\\Controller\\RestaurantController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1150 => [[['_route' => 'app_restaurant_delete', '_controller' => 'App\\Controller\\RestaurantController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1192 => [[['_route' => 'remove-from_favorites', '_controller' => 'App\\Controller\\RestaurantController::RemoveFromFavorites'], ['id'], null, null, false, true, null]],
        1214 => [[['_route' => 'registration', '_controller' => 'App\\Controller\\RegistrationController::register'], [], null, null, false, false, null]],
        1233 => [[['_route' => 'favorites', '_controller' => 'App\\Controller\\RestaurantController::favorites'], [], null, null, false, false, null]],
        1254 => [[['_route' => 'logout', '_controller' => 'App\\Controller\\SecurityController::logout'], [], null, null, false, false, null]],
        1273 => [[['_route' => 'app_trajet_index', '_controller' => 'App\\Controller\\TrajetController::index'], [], ['GET' => 0], null, true, false, null]],
        1297 => [[['_route' => 'app_trajet_show', '_controller' => 'App\\Controller\\TrajetController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1311 => [[['_route' => 'app_trajet_edit', '_controller' => 'App\\Controller\\TrajetController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1320 => [[['_route' => 'app_trajet_delete', '_controller' => 'App\\Controller\\TrajetController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1357 => [[['_route' => 'app_trajet_controller_back_show', '_controller' => 'App\\Controller\\TrajetControllerBackController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1371 => [[['_route' => 'app_trajet_controller_back_edit', '_controller' => 'App\\Controller\\TrajetControllerBackController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1380 => [[['_route' => 'app_trajet_controller_back_delete', '_controller' => 'App\\Controller\\TrajetControllerBackController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1423 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        1444 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        1464 => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], [], null, null, true, false, null]],
        1503 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        1518 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        1539 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        1553 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        1564 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];