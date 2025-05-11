<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'accueil', '_controller' => 'App\\Controller\\AccueilController::index'], null, null, null, false, false, null]],
        '/cat/tournois' => [[['_route' => 'app_cat_tournois', '_controller' => 'App\\Controller\\CatTournoisController::index'], null, null, null, false, false, null]],
        '/cat/tournois/ajouter' => [[['_route' => 'app_cat_tournois_ajouter', '_controller' => 'App\\Controller\\CatTournoisController::ajouter'], null, null, null, false, false, null]],
        '/connexion/valider' => [[['_route' => 'connexion_valider', '_controller' => 'App\\Controller\\ConnexionController::validerConnexion'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'deconnexion', '_controller' => 'App\\Controller\\ConnexionController::deconnexion'], null, null, null, false, false, null]],
        '/genres' => [[['_route' => 'genres_afficher', '_controller' => 'App\\Controller\\GenresController::index'], null, null, null, false, false, null]],
        '/genres/ajouter' => [[['_route' => 'genres_ajouter', '_controller' => 'App\\Controller\\GenresController::ajouter'], null, null, null, false, false, null]],
        '/genres/demandermodifier' => [[['_route' => 'genres_demandermodifier', '_controller' => 'App\\Controller\\GenresController::demanderModifier'], null, null, null, false, false, null]],
        '/genres/validermodifier' => [[['_route' => 'genres_validermodifier', '_controller' => 'App\\Controller\\GenresController::validerModifier'], null, null, null, false, false, null]],
        '/genres/supprimer' => [[['_route' => 'genres_supprimer', '_controller' => 'App\\Controller\\GenresController::supprimer'], null, null, null, false, false, null]],
        '/jeux' => [[['_route' => 'app_jeux', '_controller' => 'App\\Controller\\JeuxController::index'], null, null, null, false, false, null]],
        '/jeux/ajouter' => [[['_route' => 'app_jeux_ajouter', '_controller' => 'App\\Controller\\JeuxController::ajouter'], null, null, null, false, false, null]],
        '/marques' => [[['_route' => 'marques_afficher', '_controller' => 'App\\Controller\\MarquesController::index'], null, null, null, false, false, null]],
        '/marques/ajouter' => [[['_route' => 'marques_ajouter', '_controller' => 'App\\Controller\\MarquesController::ajouter'], null, null, null, false, false, null]],
        '/marques/demandermodifier' => [[['_route' => 'marques_demandermodifier', '_controller' => 'App\\Controller\\MarquesController::demanderModifier'], null, null, null, false, false, null]],
        '/marques/validermodifier' => [[['_route' => 'marques_validermodifier', '_controller' => 'App\\Controller\\MarquesController::validerModifier'], null, null, null, false, false, null]],
        '/marques/supprimer' => [[['_route' => 'marques_supprimer', '_controller' => 'App\\Controller\\MarquesController::supprimer'], null, null, null, false, false, null]],
        '/membres' => [[['_route' => 'app_membres_index', '_controller' => 'App\\Controller\\MembresController::index'], null, ['GET' => 0], null, true, false, null]],
        '/membres/new' => [[['_route' => 'app_membres_new', '_controller' => 'App\\Controller\\MembresController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/participants' => [[['_route' => 'app_participants', '_controller' => 'App\\Controller\\ParticipantsController::index'], null, null, null, false, false, null]],
        '/pegi' => [[['_route' => 'pegis_afficher', '_controller' => 'App\\Controller\\PegiController::index'], null, null, null, false, false, null]],
        '/pegi/ajouter' => [[['_route' => 'pegis_ajouter', '_controller' => 'App\\Controller\\PegiController::ajouter'], null, null, null, false, false, null]],
        '/pegi/demandermodifier' => [[['_route' => 'pegis_demandermodifier', '_controller' => 'App\\Controller\\PegiController::demanderModifier'], null, null, null, false, false, null]],
        '/pegi/validermodifier' => [[['_route' => 'pegis_validermodifier', '_controller' => 'App\\Controller\\PegiController::validerModifier'], null, null, null, false, false, null]],
        '/pegi/supprimer' => [[['_route' => 'pegis_supprimer', '_controller' => 'App\\Controller\\PegiController::supprimer'], null, null, null, false, false, null]],
        '/plateformes' => [[['_route' => 'plateformes_afficher', '_controller' => 'App\\Controller\\PlateformesController::index'], null, null, null, false, false, null]],
        '/plateformes/ajouter' => [[['_route' => 'plateformes_ajouter', '_controller' => 'App\\Controller\\PlateformesController::ajouter'], null, null, null, false, false, null]],
        '/plateformes/demandermodifier' => [[['_route' => 'plateformes_demandermodifier', '_controller' => 'App\\Controller\\PlateformesController::demanderModifier'], null, null, null, false, false, null]],
        '/plateformes/validermodifier' => [[['_route' => 'plateformes_validermodifier', '_controller' => 'App\\Controller\\PlateformesController::validerModifier'], null, null, null, false, false, null]],
        '/plateformes/supprimer' => [[['_route' => 'plateformes_supprimer', '_controller' => 'App\\Controller\\PlateformesController::supprimer'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/stages' => [[['_route' => 'app_stages_index', '_controller' => 'App\\Controller\\StagesController::index'], null, ['GET' => 0], null, false, false, null]],
        '/stages/new' => [[['_route' => 'app_stages_new', '_controller' => 'App\\Controller\\StagesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/tournois' => [[['_route' => 'app_tournois', '_controller' => 'App\\Controller\\TournoisController::index'], null, null, null, false, false, null]],
        '/tournoi/creer' => [[['_route' => 'app_tournoi_creer', '_controller' => 'App\\Controller\\TournoisController::creerTournoi'], null, null, null, false, false, null]],
        '/tournoi/complet/creer' => [[['_route' => 'app_tournoi_complet_creer', '_controller' => 'App\\Controller\\TournoisController::creerTournoiComplet'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/ca(?'
                    .'|t/tournois/(?'
                        .'|demandermodification(?:/(\\d+))?(*:253)'
                        .'|modifier/(\\d+)(*:275)'
                    .')'
                    .'|/tournois/supprimer/(\\d+)(*:309)'
                .')'
                .'|/jeux/(?'
                    .'|modifier/(\\d+)(*:341)'
                    .'|supprimer/(\\d+)(*:364)'
                .')'
                .'|/membres/([^/]++)(?'
                    .'|(*:393)'
                    .'|/edit(*:406)'
                    .'|(*:414)'
                .')'
                .'|/stages/([^/]++)(?'
                    .'|(*:442)'
                    .'|/edit(*:455)'
                    .'|(*:463)'
                .')'
                .'|/tournoi(?'
                    .'|/(?'
                        .'|([^/]++)(*:495)'
                        .'|modifier/([^/]++)(*:520)'
                        .'|supprimer/([^/]++)(*:546)'
                    .')'
                    .'|automatique/([^/]++)(*:575)'
                    .'|s/([^/]++)(*:593)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        253 => [[['_route' => 'app_cat_tournois_demandermodification', 'id' => null, '_controller' => 'App\\Controller\\CatTournoisController::index'], ['id'], null, null, false, true, null]],
        275 => [[['_route' => 'app_cat_tournois_modifier', '_controller' => 'App\\Controller\\CatTournoisController::modifier'], ['id'], null, null, false, true, null]],
        309 => [[['_route' => 'app_cat_tournois_supprimer', '_controller' => 'App\\Controller\\CatTournoisController::supprimer'], ['id'], null, null, false, true, null]],
        341 => [[['_route' => 'app_jeux_modifier', '_controller' => 'App\\Controller\\JeuxController::modifier'], ['id'], null, null, false, true, null]],
        364 => [[['_route' => 'app_jeux_supprimer', '_controller' => 'App\\Controller\\JeuxController::supprimer'], ['id'], null, null, false, true, null]],
        393 => [[['_route' => 'app_membres_show', '_controller' => 'App\\Controller\\MembresController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        406 => [[['_route' => 'app_membres_edit', '_controller' => 'App\\Controller\\MembresController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        414 => [[['_route' => 'app_membres_delete', '_controller' => 'App\\Controller\\MembresController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        442 => [[['_route' => 'app_stages_show', '_controller' => 'App\\Controller\\StagesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        455 => [[['_route' => 'app_stages_edit', '_controller' => 'App\\Controller\\StagesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        463 => [[['_route' => 'app_stages_delete', '_controller' => 'App\\Controller\\StagesController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        495 => [[['_route' => 'app_tournoi_lire', '_controller' => 'App\\Controller\\TournoisController::lire'], ['id'], null, null, false, true, null]],
        520 => [[['_route' => 'app_tournoi_modifier', '_controller' => 'App\\Controller\\TournoisController::modifier'], ['id'], null, null, false, true, null]],
        546 => [[['_route' => 'app_tournoi_supprimer', '_controller' => 'App\\Controller\\TournoisController::supprimer'], ['id'], null, null, false, true, null]],
        575 => [[['_route' => 'app_tournoiautomatique_lire', '_controller' => 'App\\Controller\\TournoisController::lireautomatique'], ['id'], null, null, false, true, null]],
        593 => [
            [['_route' => 'app_tournois_lireTournois', '_controller' => 'App\\Controller\\TournoisController::lireTournois'], ['datemax'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
