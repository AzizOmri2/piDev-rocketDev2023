<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/addActivite' => [[['_route' => 'addActivite', '_controller' => 'App\\Controller\\ActiviteController::addActivite'], null, null, null, false, false, null]],
        '/viewActivite' => [[['_route' => 'viewActivite', '_controller' => 'App\\Controller\\ActiviteController::viewActivite'], null, null, null, false, false, null]],
        '/competition' => [[['_route' => 'app_competition_index', '_controller' => 'App\\Controller\\CompetitionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/competition/viewFront' => [[['_route' => 'app_competition_showFront', '_controller' => 'App\\Controller\\CompetitionController::FrontView'], null, ['GET' => 0], null, false, false, null]],
        '/competition/new' => [[['_route' => 'app_competition_new', '_controller' => 'App\\Controller\\CompetitionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/addCours' => [[['_route' => 'addCours', '_controller' => 'App\\Controller\\CoursController::addCours'], null, null, null, false, false, null]],
        '/viewCours' => [[['_route' => 'viewCours', '_controller' => 'App\\Controller\\CoursController::viewCours'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/addPlanning' => [[['_route' => 'addPlanning', '_controller' => 'App\\Controller\\PlanningController::index'], null, null, null, false, false, null]],
        '/viewPlanning' => [[['_route' => 'viewPlanning', '_controller' => 'App\\Controller\\PlanningController::viewPlanning'], null, null, null, false, false, null]],
        '/front' => [[['_route' => 'app_front', '_controller' => 'App\\Controller\\TestController::index'], null, null, null, false, false, null]],
        '/ticket' => [[['_route' => 'app_ticket_index', '_controller' => 'App\\Controller\\TicketController::index'], null, ['GET' => 0], null, true, false, null]],
        '/ticket/new' => [[['_route' => 'app_ticket_new', '_controller' => 'App\\Controller\\TicketController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/competition/(?'
                    .'|viewFront/([^/]++)(*:41)'
                    .'|([^/]++)(?'
                        .'|/(?'
                            .'|reserver(*:71)'
                            .'|edit(*:82)'
                        .')'
                        .'|(*:90)'
                    .')'
                .')'
                .'|/ticket/(?'
                    .'|competition/([^/]++)/ticket(*:137)'
                    .'|([^/]++)(?'
                        .'|(*:156)'
                        .'|/edit(*:169)'
                        .'|(*:177)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:218)'
                    .'|wdt/([^/]++)(*:238)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:284)'
                            .'|router(*:298)'
                            .'|exception(?'
                                .'|(*:318)'
                                .'|\\.css(*:331)'
                            .')'
                        .')'
                        .'|(*:341)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        41 => [[['_route' => 'app_competition_Front', '_controller' => 'App\\Controller\\CompetitionController::showFront'], ['id'], ['GET' => 0], null, false, true, null]],
        71 => [[['_route' => 'app_competition_reserver', '_controller' => 'App\\Controller\\CompetitionController::reserver'], ['id'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        82 => [[['_route' => 'app_competition_edit', '_controller' => 'App\\Controller\\CompetitionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        90 => [
            [['_route' => 'app_competition_show', '_controller' => 'App\\Controller\\CompetitionController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_competition_delete', '_controller' => 'App\\Controller\\CompetitionController::delete'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        137 => [[['_route' => 'app_ticket_Front', '_controller' => 'App\\Controller\\TicketController::showFront'], ['id'], ['GET' => 0], null, false, false, null]],
        156 => [[['_route' => 'app_ticket_show', '_controller' => 'App\\Controller\\TicketController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        169 => [[['_route' => 'app_ticket_edit', '_controller' => 'App\\Controller\\TicketController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        177 => [[['_route' => 'app_ticket_delete', '_controller' => 'App\\Controller\\TicketController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        218 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        238 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        284 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        298 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        318 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        331 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        341 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
