<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'app.swagger' => [[], ['_controller' => 'nelmio_api_doc.controller.swagger'], [], [['text', '/api/doc.json']], [], [], []],
    'app.swagger_ui' => [[], ['_controller' => 'nelmio_api_doc.controller.swagger_ui'], [], [['text', '/api/doc']], [], [], []],
    'createTechGuest' => [[], ['_controller' => 'App\\Controller\\CreateTechGuestAction'], [], [['text', '/api/guest']], [], [], []],
    'deleteTechGuest' => [['id'], ['_controller' => 'App\\Controller\\DeleteTechGuestAction'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/guest']], [], [], []],
    'getTechGuest' => [['id'], ['_controller' => 'App\\Controller\\GetTechGuestAction'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/guest']], [], [], []],
    'updateTechGuest' => [['id'], ['_controller' => 'App\\Controller\\UpdateTechGuestAction'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/guest']], [], [], []],
    'App\Controller\CreateTechGuestAction' => [[], ['_controller' => 'App\\Controller\\CreateTechGuestAction'], [], [['text', '/api/guest']], [], [], []],
    'App\Controller\CreateTechGuestAction::__invoke' => [[], ['_controller' => 'App\\Controller\\CreateTechGuestAction'], [], [['text', '/api/guest']], [], [], []],
    'App\Controller\DeleteTechGuestAction' => [['id'], ['_controller' => 'App\\Controller\\DeleteTechGuestAction'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/guest']], [], [], []],
    'App\Controller\DeleteTechGuestAction::__invoke' => [['id'], ['_controller' => 'App\\Controller\\DeleteTechGuestAction'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/guest']], [], [], []],
    'App\Controller\GetTechGuestAction' => [['id'], ['_controller' => 'App\\Controller\\GetTechGuestAction'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/guest']], [], [], []],
    'App\Controller\GetTechGuestAction::__invoke' => [['id'], ['_controller' => 'App\\Controller\\GetTechGuestAction'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/guest']], [], [], []],
    'App\Controller\UpdateTechGuestAction' => [['id'], ['_controller' => 'App\\Controller\\UpdateTechGuestAction'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/guest']], [], [], []],
    'App\Controller\UpdateTechGuestAction::__invoke' => [['id'], ['_controller' => 'App\\Controller\\UpdateTechGuestAction'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/guest']], [], [], []],
];
