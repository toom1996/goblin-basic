<?php
$swoole = require __DIR__ . '/swoole.php';
$route = require __DIR__ . '/route.php';

return [
    // Application id.
    'id' => 'goblin-http-application',

    'swoole' => $swoole,

    // Aliases.
    'aliases' => [
        '@app' => APP_PATH,
        '@controllers' => APP_PATH . '/controllers',
        '@runtime' => APP_PATH  . '/runtime',
    ],
    'route' => $route,
    'components' => [
        'log' => [
            'targets' => [
                'application' => [
                    'logFile' => '@runtime/log/app.log'
                ],
                'debug' => [
                    'logFile' => '@runtime/log/debug.log'
                ]
            ],
        ]
    ],
];