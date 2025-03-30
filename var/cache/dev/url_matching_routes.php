<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/doc.json' => [[['_route' => 'app.swagger', '_controller' => 'nelmio_api_doc.controller.swagger'], null, ['GET' => 0], null, false, false, null]],
        '/api/doc' => [[['_route' => 'app.swagger_ui', '_controller' => 'nelmio_api_doc.controller.swagger_ui'], null, ['GET' => 0], null, false, false, null]],
        '/api/guest' => [[['_route' => 'createTechGuest', '_controller' => 'App\\Controller\\CreateTechGuestAction'], null, ['PUT' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/api/guest/([^/]++)(?'
                    .'|(*:64)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        64 => [
            [['_route' => 'deleteTechGuest', '_controller' => 'App\\Controller\\DeleteTechGuestAction'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'getTechGuest', '_controller' => 'App\\Controller\\GetTechGuestAction'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'updateTechGuest', '_controller' => 'App\\Controller\\UpdateTechGuestAction'], ['id'], ['PATCH' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
