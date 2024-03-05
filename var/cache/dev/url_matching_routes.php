<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin/profiledition' => [[['_route' => 'admin_account_edit', '_controller' => 'App\\Controller\\AdminAccountController::edit'], null, null, null, false, false, null]],
        '/admin/profil' => [[['_route' => 'admin_account_index', '_controller' => 'App\\Controller\\AdminAccountController::index'], null, null, null, false, false, null]],
        '/admin/tableau-de-bord' => [[['_route' => 'admin_dashboard_index', '_controller' => 'App\\Controller\\AdminDashboardController::index'], null, null, null, false, false, null]],
        '/admin/parametre' => [[['_route' => 'admin_parameter_index', '_controller' => 'App\\Controller\\AdminParameterController::edit'], null, null, null, false, false, null]],
        '/admin/utilisateur' => [[['_route' => 'admin_user_index', '_controller' => 'App\\Controller\\AdminUserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/utilisateur/add' => [[['_route' => 'admin_user_add', '_controller' => 'App\\Controller\\AdminUserController::add'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/back' => [[['_route' => 'app_back', '_controller' => 'App\\Controller\\BackController::index'], null, null, null, false, false, null]],
        '/export/excel' => [[['_route' => 'export_excel', '_controller' => 'App\\Controller\\ExelController::exportExcel'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home_index', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
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
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/ad(?'
                    .'|min/utilisateur(?'
                        .'|/([^/]++)(?'
                            .'|(*:43)'
                            .'|/edit(*:55)'
                        .')'
                        .'|([^/]++)/suppression(*:83)'
                    .')'
                    .'|d\\-to\\-favorites/([^/]++)(*:116)'
                .')'
                .'|/plat/([^/]++)(?'
                    .'|(*:142)'
                    .'|/edit(*:155)'
                    .'|(*:163)'
                .')'
                .'|/re(?'
                    .'|clamation/(?'
                        .'|back/([^/]++)(?'
                            .'|/(?'
                                .'|repondre(*:219)'
                                .'|show_response(*:240)'
                                .'|edit(*:252)'
                            .')'
                            .'|(*:261)'
                        .')'
                        .'|([^/]++)(?'
                            .'|(*:281)'
                            .'|/edit(*:294)'
                            .'|(*:302)'
                        .')'
                    .')'
                    .'|ponse/(?'
                        .'|back/([^/]++)(?'
                            .'|(*:337)'
                            .'|/edit(*:350)'
                            .'|(*:358)'
                        .')'
                        .'|([^/]++)(?'
                            .'|(*:378)'
                            .'|/edit(*:391)'
                            .'|(*:399)'
                        .')'
                    .')'
                    .'|s(?'
                        .'|et\\-password/reset(?:/([^/]++))?(*:445)'
                        .'|taurant(?'
                            .'|/([^/]++)(?'
                                .'|(*:475)'
                                .'|/edit(*:488)'
                                .'|(*:496)'
                            .')'
                            .'|front/([^/]++)(*:519)'
                        .')'
                    .')'
                    .'|move\\-from\\-favorites/([^/]++)(*:559)'
                .')'
                .'|/show_in_map/([^/]++)(*:589)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:628)'
                    .'|wdt/([^/]++)(*:648)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:694)'
                            .'|router(*:708)'
                            .'|exception(?'
                                .'|(*:728)'
                                .'|\\.css(*:741)'
                            .')'
                        .')'
                        .'|(*:751)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        43 => [[['_route' => 'admin_user_show', '_controller' => 'App\\Controller\\AdminUserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        55 => [[['_route' => 'admin_user_edit', '_controller' => 'App\\Controller\\AdminUserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        83 => [[['_route' => 'admin_user_delete', '_controller' => 'App\\Controller\\AdminUserController::delete'], ['id'], null, null, false, false, null]],
        116 => [[['_route' => 'add_to_favorites', '_controller' => 'App\\Controller\\RestaurantController::addToFavorites'], ['id'], null, null, false, true, null]],
        142 => [[['_route' => 'app_plat_show', '_controller' => 'App\\Controller\\PlatController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        155 => [[['_route' => 'app_plat_edit', '_controller' => 'App\\Controller\\PlatController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        163 => [[['_route' => 'app_plat_delete', '_controller' => 'App\\Controller\\PlatController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        219 => [[['_route' => 'app_reclamation_back_repondre', '_controller' => 'App\\Controller\\ReclamationBackController::repondre'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        240 => [[['_route' => 'app_reclamation_back_show_response', '_controller' => 'App\\Controller\\ReclamationBackController::showResponse'], ['id'], ['GET' => 0], null, false, false, null]],
        252 => [[['_route' => 'app_reclamation_back_edit', '_controller' => 'App\\Controller\\ReclamationBackController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        261 => [
            [['_route' => 'app_reclamation_back_show', '_controller' => 'App\\Controller\\ReclamationBackController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_reclamation_back_delete', '_controller' => 'App\\Controller\\ReclamationBackController::delete'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        281 => [[['_route' => 'app_reclamation_show', '_controller' => 'App\\Controller\\ReclamationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        294 => [[['_route' => 'app_reclamation_edit', '_controller' => 'App\\Controller\\ReclamationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        302 => [[['_route' => 'app_reclamation_delete', '_controller' => 'App\\Controller\\ReclamationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        337 => [[['_route' => 'app_reponse_back_show', '_controller' => 'App\\Controller\\ReponseBackController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        350 => [[['_route' => 'app_reponse_back_edit', '_controller' => 'App\\Controller\\ReponseBackController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        358 => [[['_route' => 'app_reponse_back_delete', '_controller' => 'App\\Controller\\ReponseBackController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        378 => [[['_route' => 'app_reponse_show', '_controller' => 'App\\Controller\\ReponseController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        391 => [[['_route' => 'app_reponse_edit', '_controller' => 'App\\Controller\\ReponseController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        399 => [[['_route' => 'app_reponse_delete', '_controller' => 'App\\Controller\\ReponseController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        445 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        475 => [[['_route' => 'app_restaurant_show', '_controller' => 'App\\Controller\\RestaurantController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        488 => [[['_route' => 'app_restaurant_edit', '_controller' => 'App\\Controller\\RestaurantController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        496 => [[['_route' => 'app_restaurant_delete', '_controller' => 'App\\Controller\\RestaurantController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        519 => [[['_route' => 'app_restaurant_showfront', '_controller' => 'App\\Controller\\RestaurantController::showfront'], ['id'], ['GET' => 0], null, false, true, null]],
        559 => [[['_route' => 'remove-from_favorites', '_controller' => 'App\\Controller\\RestaurantController::RemoveFromFavorites'], ['id'], null, null, false, true, null]],
        589 => [[['_route' => 'app_restaurant_map', '_controller' => 'App\\Controller\\RestaurantController::Map'], ['id'], ['GET' => 0], null, false, true, null]],
        628 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        648 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        694 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        708 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        728 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        741 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        751 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
