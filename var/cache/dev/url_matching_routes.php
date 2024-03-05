<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/activitee/back' => [[['_route' => 'app_activitee_back_index', '_controller' => 'App\\Controller\\ActiviteeBackController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/activitee/back/new' => [[['_route' => 'app_activitee_back_new', '_controller' => 'App\\Controller\\ActiviteeBackController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/activite' => [[['_route' => 'app_activitee_index', '_controller' => 'App\\Controller\\ActiviteeController::index'], null, ['GET' => 0], null, false, false, null]],
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
                .'|/plat(?'
                    .'|(*:467)'
                    .'|/([^/]++)(?'
                        .'|(*:487)'
                        .'|/edit(*:500)'
                        .'|(*:508)'
                    .')'
                .')'
                .'|/re(?'
                    .'|clamation(?'
                        .'|/(?'
                            .'|back/([^/]++)(?'
                                .'|/(?'
                                    .'|repondre(*:568)'
                                    .'|show_response(*:589)'
                                    .'|edit(*:601)'
                                .')'
                                .'|(*:610)'
                            .')'
                            .'|([^/]++)(?'
                                .'|(*:630)'
                                .'|/edit(*:643)'
                                .'|(*:651)'
                            .')'
                        .')'
                        .'|(*:661)'
                    .')'
                    .'|ponse(?'
                        .'|/(?'
                            .'|back/([^/]++)(?'
                                .'|(*:698)'
                                .'|/edit(*:711)'
                                .'|(*:719)'
                            .')'
                            .'|([^/]++)(?'
                                .'|(*:739)'
                                .'|/edit(*:752)'
                                .'|(*:760)'
                            .')'
                        .')'
                        .'|(*:770)'
                    .')'
                    .'|s(?'
                        .'|et\\-password(?'
                            .'|(*:798)'
                            .'|/reset(?:/([^/]++))?(*:826)'
                        .')'
                        .'|taurant(?'
                            .'|(*:845)'
                            .'|front(?'
                                .'|(*:861)'
                                .'|/([^/]++)(*:878)'
                                .'|favoris(*:893)'
                            .')'
                            .'|/([^/]++)(?'
                                .'|(*:914)'
                                .'|/edit(*:927)'
                                .'|(*:935)'
                            .')'
                        .')'
                    .')'
                    .'|move\\-from\\-favorites/([^/]++)(*:976)'
                .')'
                .'|/inscription(*:997)'
                .'|/favorites(*:1015)'
                .'|/deconnexion(*:1036)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:1076)'
                    .'|wdt/([^/]++)(*:1097)'
                    .'|profiler(?'
                        .'|(*:1117)'
                        .'|/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:1156)'
                                .'|router(*:1171)'
                                .'|exception(?'
                                    .'|(*:1192)'
                                    .'|\\.css(*:1206)'
                                .')'
                            .')'
                            .'|(*:1217)'
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
        467 => [[['_route' => 'app_plat_index', '_controller' => 'App\\Controller\\PlatController::index'], [], ['GET' => 0], null, true, false, null]],
        487 => [[['_route' => 'app_plat_show', '_controller' => 'App\\Controller\\PlatController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        500 => [[['_route' => 'app_plat_edit', '_controller' => 'App\\Controller\\PlatController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        508 => [[['_route' => 'app_plat_delete', '_controller' => 'App\\Controller\\PlatController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        568 => [[['_route' => 'app_reclamation_back_repondre', '_controller' => 'App\\Controller\\ReclamationBackController::repondre'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        589 => [[['_route' => 'app_reclamation_back_show_response', '_controller' => 'App\\Controller\\ReclamationBackController::showResponse'], ['id'], ['GET' => 0], null, false, false, null]],
        601 => [[['_route' => 'app_reclamation_back_edit', '_controller' => 'App\\Controller\\ReclamationBackController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        610 => [
            [['_route' => 'app_reclamation_back_show', '_controller' => 'App\\Controller\\ReclamationBackController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_reclamation_back_delete', '_controller' => 'App\\Controller\\ReclamationBackController::delete'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        630 => [[['_route' => 'app_reclamation_show', '_controller' => 'App\\Controller\\ReclamationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        643 => [[['_route' => 'app_reclamation_edit', '_controller' => 'App\\Controller\\ReclamationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        651 => [[['_route' => 'app_reclamation_delete', '_controller' => 'App\\Controller\\ReclamationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        661 => [[['_route' => 'app_reclamation_index', '_controller' => 'App\\Controller\\ReclamationController::index'], [], ['GET' => 0, 'POST' => 1], null, true, false, null]],
        698 => [[['_route' => 'app_reponse_back_show', '_controller' => 'App\\Controller\\ReponseBackController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        711 => [[['_route' => 'app_reponse_back_edit', '_controller' => 'App\\Controller\\ReponseBackController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        719 => [[['_route' => 'app_reponse_back_delete', '_controller' => 'App\\Controller\\ReponseBackController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        739 => [[['_route' => 'app_reponse_show', '_controller' => 'App\\Controller\\ReponseController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        752 => [[['_route' => 'app_reponse_edit', '_controller' => 'App\\Controller\\ReponseController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        760 => [[['_route' => 'app_reponse_delete', '_controller' => 'App\\Controller\\ReponseController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        770 => [[['_route' => 'app_reponse_index', '_controller' => 'App\\Controller\\ReponseController::index'], [], ['GET' => 0], null, true, false, null]],
        798 => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], [], null, null, false, false, null]],
        826 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        845 => [[['_route' => 'app_restaurant_index', '_controller' => 'App\\Controller\\RestaurantController::index'], [], null, null, false, false, null]],
        861 => [[['_route' => 'app_restaurant_indexfront', '_controller' => 'App\\Controller\\RestaurantController::indexFront'], [], null, null, false, false, null]],
        878 => [[['_route' => 'app_restaurant_showfront', '_controller' => 'App\\Controller\\RestaurantController::showfront'], ['id'], ['GET' => 0], null, false, true, null]],
        893 => [[['_route' => 'app_restaurant_favoris', '_controller' => 'App\\Controller\\RestaurantController::indexFrontfavoris'], [], null, null, false, false, null]],
        914 => [[['_route' => 'app_restaurant_show', '_controller' => 'App\\Controller\\RestaurantController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        927 => [[['_route' => 'app_restaurant_edit', '_controller' => 'App\\Controller\\RestaurantController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        935 => [[['_route' => 'app_restaurant_delete', '_controller' => 'App\\Controller\\RestaurantController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        976 => [[['_route' => 'remove-from_favorites', '_controller' => 'App\\Controller\\RestaurantController::RemoveFromFavorites'], ['id'], null, null, false, true, null]],
        997 => [[['_route' => 'registration', '_controller' => 'App\\Controller\\RegistrationController::register'], [], null, null, false, false, null]],
        1015 => [[['_route' => 'favorites', '_controller' => 'App\\Controller\\RestaurantController::favorites'], [], null, null, false, false, null]],
        1036 => [[['_route' => 'logout', '_controller' => 'App\\Controller\\SecurityController::logout'], [], null, null, false, false, null]],
        1076 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        1097 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        1117 => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], [], null, null, true, false, null]],
        1156 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        1171 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        1192 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        1206 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        1217 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
