<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'addActivite' => [[], ['_controller' => 'App\\Controller\\ActiviteController::addActivite'], [], [['text', '/addActivite']], [], [], []],
    'viewActivite' => [[], ['_controller' => 'App\\Controller\\ActiviteController::viewActivite'], [], [['text', '/viewActivite']], [], [], []],
    'app_competition_index' => [[], ['_controller' => 'App\\Controller\\CompetitionController::index'], [], [['text', '/competition/']], [], [], []],
    'app_competition_json' => [[], ['_controller' => 'App\\Controller\\CompetitionController::getCompetitions'], [], [['text', '/competition/CompetitionsJson']], [], [], []],
    'app_competition_showFront' => [[], ['_controller' => 'App\\Controller\\CompetitionController::FrontView'], [], [['text', '/competition/viewFront']], [], [], []],
    'app_competition_nonDispo' => [[], ['_controller' => 'App\\Controller\\CompetitionController::showNonDispo'], [], [['text', '/competition/viewNonDispo']], [], [], []],
    'app_competition_Front' => [['id'], ['_controller' => 'App\\Controller\\CompetitionController::showFront'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/competition/viewFront']], [], [], []],
    'app_competition_new' => [[], ['_controller' => 'App\\Controller\\CompetitionController::new'], [], [['text', '/competition/new']], [], [], []],
    'app_competition_newJson' => [[], ['_controller' => 'App\\Controller\\CompetitionController::newJson'], [], [['text', '/competition/newJson']], [], [], []],
    'app_competition_reserver' => [['id'], ['_controller' => 'App\\Controller\\CompetitionController::reserver'], [], [['text', '/reserver'], ['variable', '/', '[^/]++', 'id', true], ['text', '/competition']], [], [], []],
    'app_competition_show' => [['id'], ['_controller' => 'App\\Controller\\CompetitionController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/competition']], [], [], []],
    'app_competition_showJson' => [['id'], ['_controller' => 'App\\Controller\\CompetitionController::showJson'], [], [['text', '/json'], ['variable', '/', '[^/]++', 'id', true], ['text', '/competition']], [], [], []],
    'app_competition_edit' => [['id'], ['_controller' => 'App\\Controller\\CompetitionController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/competition']], [], [], []],
    'app_competition_editJson' => [['id'], ['_controller' => 'App\\Controller\\CompetitionController::editJson'], [], [['text', '/editJson'], ['variable', '/', '[^/]++', 'id', true], ['text', '/competition']], [], [], []],
    'app_competition_delete' => [['id'], ['_controller' => 'App\\Controller\\CompetitionController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/competition']], [], [], []],
    'app_competition_deleteJson' => [['id'], ['_controller' => 'App\\Controller\\CompetitionController::deleteJson'], [], [['text', '/DeleteJson'], ['variable', '/', '[^/]++', 'id', true], ['text', '/competition']], [], [], []],
    'addCours' => [[], ['_controller' => 'App\\Controller\\CoursController::addCours'], [], [['text', '/addCours']], [], [], []],
    'viewCours' => [[], ['_controller' => 'App\\Controller\\CoursController::viewCours'], [], [['text', '/viewCours']], [], [], []],
    'app_home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/home']], [], [], []],
    'addPlanning' => [[], ['_controller' => 'App\\Controller\\PlanningController::index'], [], [['text', '/addPlanning']], [], [], []],
    'viewPlanning' => [[], ['_controller' => 'App\\Controller\\PlanningController::viewPlanning'], [], [['text', '/viewPlanning']], [], [], []],
    'app_front' => [[], ['_controller' => 'App\\Controller\\TestController::index'], [], [['text', '/front']], [], [], []],
    'app_ticket_index' => [[], ['_controller' => 'App\\Controller\\TicketController::index'], [], [['text', '/ticket/']], [], [], []],
    'app_ticket_indexJson' => [[], ['_controller' => 'App\\Controller\\TicketController::indexJson'], [], [['text', '/ticket/json']], [], [], []],
    'app_ticket_new' => [[], ['_controller' => 'App\\Controller\\TicketController::new'], [], [['text', '/ticket/new']], [], [], []],
    'app_ticket_newJson' => [[], ['_controller' => 'App\\Controller\\TicketController::newJson'], [], [['text', '/ticket/newJson']], [], [], []],
    'app_ticket_Front' => [['id'], ['_controller' => 'App\\Controller\\TicketController::showFront'], [], [['text', '/ticket'], ['variable', '/', '[^/]++', 'id', true], ['text', '/ticket/competition']], [], [], []],
    'app_ticket_show' => [['id'], ['_controller' => 'App\\Controller\\TicketController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/ticket']], [], [], []],
    'app_ticket_showJson' => [['id'], ['_controller' => 'App\\Controller\\TicketController::showJson'], [], [['text', '/json'], ['variable', '/', '[^/]++', 'id', true], ['text', '/ticket']], [], [], []],
    'app_ticket_edit' => [['id'], ['_controller' => 'App\\Controller\\TicketController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/ticket']], [], [], []],
    'app_ticket_editJson' => [['id'], ['_controller' => 'App\\Controller\\TicketController::editJson'], [], [['text', '/editJson'], ['variable', '/', '[^/]++', 'id', true], ['text', '/ticket']], [], [], []],
    'app_ticket_delete' => [['id'], ['_controller' => 'App\\Controller\\TicketController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/ticket']], [], [], []],
    'app_ticket_deleteJson' => [['id'], ['_controller' => 'App\\Controller\\TicketController::deleteJson'], [], [['text', '/deleteJson'], ['variable', '/', '[^/]++', 'id', true], ['text', '/ticket']], [], [], []],
    'app_ticket_pdf' => [['id'], ['_controller' => 'App\\Controller\\TicketController::AfficheTicketPDF'], [], [['text', '/ticket/pdf'], ['variable', '/', '[^/]++', 'id', true], ['text', '/ticket/competition']], [], [], []],
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
];
