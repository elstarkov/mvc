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
        '/library' => [[['_route' => 'library', '_controller' => 'App\\Controller\\BookController::index'], null, ['GET' => 0], null, false, false, null]],
        '/library/create' => [
            [['_route' => 'book_create', '_controller' => 'App\\Controller\\BookController::createBook'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'post_create', '_controller' => 'App\\Controller\\BookController::PostCreateBook'], null, ['POST' => 0], null, false, false, null],
        ],
        '/library/show' => [[['_route' => 'book_show_all', '_controller' => 'App\\Controller\\BookController::showAllBooks'], null, ['GET' => 0], null, false, false, null]],
        '/card' => [[['_route' => 'card', '_controller' => 'App\\Controller\\CardsController::card'], null, null, null, false, false, null]],
        '/card/deck' => [[['_route' => 'deck', '_controller' => 'App\\Controller\\CardsController::deck'], null, null, null, false, false, null]],
        '/card/deck/shuffle' => [[['_route' => 'shuffle', '_controller' => 'App\\Controller\\CardsController::randomizedDeck'], null, null, null, false, false, null]],
        '/card/deck/draw' => [[['_route' => 'draw', '_controller' => 'App\\Controller\\CardsController::deckDraw'], null, null, null, false, false, null]],
        '/api' => [[['_route' => 'api', '_controller' => 'App\\Controller\\ControllerJson::api'], null, null, null, false, false, null]],
        '/api/deck' => [[['_route' => 'a_deck', '_controller' => 'App\\Controller\\ControllerJson::apiDeck'], null, ['GET' => 0], null, false, false, null]],
        '/api/deck/shuffle' => [
            [['_route' => 'api_shuffle', '_controller' => 'App\\Controller\\ControllerJson::getApiShuffle'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'a_shuffle', '_controller' => 'App\\Controller\\ControllerJson::postApiShuffle'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/deck/draw' => [[['_route' => 'a_draw', '_controller' => 'App\\Controller\\ControllerJson::postApiDraw'], null, ['POST' => 0], null, false, false, null]],
        '/api/quote' => [[['_route' => 'quote', '_controller' => 'App\\Controller\\ControllerJson::jsonNumber'], null, null, null, false, false, null]],
        '/game/api' => [[['_route' => 'api_game', '_controller' => 'App\\Controller\\ControllerJson::gameApiPlay'], null, ['GET' => 0], null, false, false, null]],
        '/api/library/books' => [[['_route' => 'api_books', '_controller' => 'App\\Controller\\ControllerJson::apiBooks'], null, ['GET' => 0], null, false, false, null]],
        '/game' => [
            [['_route' => 'game', '_controller' => 'App\\Controller\\GameController::game'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'game_post', '_controller' => 'App\\Controller\\GameController::gamePost'], null, ['POST' => 0], null, false, false, null],
        ],
        '/game/ace' => [[['_route' => 'ace', '_controller' => 'App\\Controller\\GameController::acePoints'], null, ['GET' => 0], null, false, false, null]],
        '/game/ace/post' => [[['_route' => 'post_ace', '_controller' => 'App\\Controller\\GameController::postAcePoints'], null, ['POST' => 0], null, false, false, null]],
        '/game/new' => [
            [['_route' => 'new_game', '_controller' => 'App\\Controller\\GameController::newGame'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'post_new_game', '_controller' => 'App\\Controller\\GameController::postNewGame'], null, ['POST' => 0], null, false, false, null],
        ],
        '/game/play' => [[['_route' => 'game_play', '_controller' => 'App\\Controller\\GameController::gamePlay'], null, ['GET' => 0], null, false, false, null]],
        '/game/play/draw' => [[['_route' => 'draw_card', '_controller' => 'App\\Controller\\GameController::drawCard'], null, ['POST' => 0], null, false, false, null]],
        '/game/play/stay' => [[['_route' => 'stay', '_controller' => 'App\\Controller\\GameController::stay'], null, ['POST' => 0], null, false, false, null]],
        '/game/doc' => [[['_route' => 'doc', '_controller' => 'App\\Controller\\GameController::doc'], null, null, null, false, false, null]],
        '/lucky' => [[['_route' => 'lucky', '_controller' => 'App\\Controller\\LuckyControllerTwig::number'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\LuckyControllerTwig::home'], null, null, null, false, false, null]],
        '/report' => [[['_route' => 'report', '_controller' => 'App\\Controller\\LuckyControllerTwig::report'], null, null, null, false, false, null]],
        '/about' => [[['_route' => 'about', '_controller' => 'App\\Controller\\LuckyControllerTwig::about'], null, null, null, false, false, null]],
        '/proj/create/mortality' => [[['_route' => 'proj_create_mortality', '_controller' => 'App\\Controller\\MaternalMortalityController::create'], null, ['GET' => 0], null, false, false, null]],
        '/metrics' => [[['_route' => 'metrics', '_controller' => 'App\\Controller\\MetricsController::metrics'], null, null, null, false, false, null]],
        '/proj/create' => [[['_route' => 'proj_create', '_controller' => 'App\\Controller\\OvercrowdedController::create'], null, ['GET' => 0], null, false, false, null]],
        '/proj' => [[['_route' => 'proj', '_controller' => 'App\\Controller\\OvercrowdedController::index'], null, ['GET' => 0], null, false, false, null]],
        '/product' => [[['_route' => 'app_product', '_controller' => 'App\\Controller\\ProductController::index'], null, null, null, false, false, null]],
        '/product/create' => [[['_route' => 'product_create', '_controller' => 'App\\Controller\\ProductController::createProduct'], null, null, null, false, false, null]],
        '/product/show' => [[['_route' => 'product_show_all', '_controller' => 'App\\Controller\\ProductController::showAllProduct'], null, null, null, false, false, null]],
        '/proj/about' => [[['_route' => 'proj_about', '_controller' => 'App\\Controller\\ProjController::index'], null, ['GET' => 0], null, false, false, null]],
        '/proj/api' => [[['_route' => 'proj_api', '_controller' => 'App\\Controller\\ProjController::proj_api'], null, ['GET' => 0], null, false, false, null]],
        '/proj/api/overcrowd' => [[['_route' => 'api_overcrowd', '_controller' => 'App\\Controller\\ProjController::api_overcrowd'], null, ['GET' => 0], null, false, false, null]],
        '/proj/api/overcrowd/sweden' => [[['_route' => 'api_sweden', '_controller' => 'App\\Controller\\ProjController::api_sweden'], null, ['GET' => 0], null, false, false, null]],
        '/proj/api/overcrowd/foreign' => [[['_route' => 'api_foreign', '_controller' => 'App\\Controller\\ProjController::api_foreign'], null, ['GET' => 0], null, false, false, null]],
        '/proj/api/mortality' => [[['_route' => 'api_mortality', '_controller' => 'App\\Controller\\ProjController::api_mortality'], null, ['GET' => 0], null, false, false, null]],
        '/proj/api/create' => [[['_route' => 'api_create', '_controller' => 'App\\Controller\\ProjController::api_create'], null, ['GET' => 0], null, false, false, null]],
        '/proj/api/create/overcrowded' => [[['_route' => 'api_create_overcrowded', '_controller' => 'App\\Controller\\ProjController::api_create_overcrowded'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/library/(?'
                    .'|show/([^/]++)(*:194)'
                    .'|update/(?'
                        .'|([^/]++)(*:220)'
                        .'|post/([^/]++)(*:241)'
                    .')'
                    .'|delete/(?'
                        .'|([^/]++)(*:268)'
                        .'|post/([^/]++)(*:289)'
                    .')'
                .')'
                .'|/card/deck/draw/(\\d+)(*:320)'
                .'|/api/(?'
                    .'|deck/draw/(\\d+)(*:351)'
                    .'|library/books/([^/]++)(*:381)'
                .')'
                .'|/pro(?'
                    .'|j/delete/(?'
                        .'|mortality/([^/]++)(*:427)'
                        .'|([^/]++)(*:443)'
                    .')'
                    .'|duct/(?'
                        .'|show/([^/]++)(*:473)'
                        .'|delete/([^/]++)(*:496)'
                        .'|update/([^/]++)/([^/]++)(*:528)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        194 => [[['_route' => 'book_id', '_controller' => 'App\\Controller\\BookController::showBookById'], ['id'], ['GET' => 0], null, false, true, null]],
        220 => [[['_route' => 'book_update', '_controller' => 'App\\Controller\\BookController::updateBook'], ['id'], ['GET' => 0], null, false, true, null]],
        241 => [[['_route' => 'post_book_update', '_controller' => 'App\\Controller\\BookController::postUpdateBook'], ['id'], ['POST' => 0], null, false, true, null]],
        268 => [[['_route' => 'book_delete', '_controller' => 'App\\Controller\\BookController::deleteBook'], ['id'], ['GET' => 0], null, false, true, null]],
        289 => [[['_route' => 'post_book_delete', '_controller' => 'App\\Controller\\BookController::postDeleteBook'], ['id'], ['POST' => 0], null, false, true, null]],
        320 => [[['_route' => 'draw_number', '_controller' => 'App\\Controller\\CardsController::drawDeckNumbers'], ['num'], null, null, false, true, null]],
        351 => [[['_route' => 'a_draw_number', '_controller' => 'App\\Controller\\ControllerJson::postApiDrawNumber'], ['num'], ['POST' => 0], null, false, true, null]],
        381 => [[['_route' => 'api_book_isbn', '_controller' => 'App\\Controller\\ControllerJson::apiIsbn'], ['isbn'], ['GET' => 0], null, false, true, null]],
        427 => [[['_route' => 'proj_delete_mortality', '_controller' => 'App\\Controller\\MaternalMortalityController::delete'], ['id'], ['GET' => 0], null, false, true, null]],
        443 => [[['_route' => 'proj_delete', '_controller' => 'App\\Controller\\OvercrowdedController::delete'], ['id'], ['GET' => 0], null, false, true, null]],
        473 => [[['_route' => 'product_by_id', '_controller' => 'App\\Controller\\ProductController::showProductById'], ['id'], null, null, false, true, null]],
        496 => [[['_route' => 'product_delete_by_id', '_controller' => 'App\\Controller\\ProductController::deleteProductById'], ['id'], null, null, false, true, null]],
        528 => [
            [['_route' => 'product_update', '_controller' => 'App\\Controller\\ProductController::updateProduct'], ['id', 'value'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
