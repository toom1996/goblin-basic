<?php
$swoole = require __DIR__ . '/swoole.php';
$route = require __DIR__ . '/route.php';

return [
    // Application id.
    'id' => 'Eazy-app',

    'swoole' => $swoole,

    // Aliases.
    'aliases' => [
        '@app' => APP_PATH,
        '@runtime' => APP_PATH  . '/runtime',
        '@controllers' => APP_PATH . '/controllers',
    ],
    'route' => $route,
    'components' => [
        'log' => [
            'targets' => [
                'application' => [
                    'microtime' => false,
                    'logFile' => '@runtime/log/app.log'
                ],
                'debug' => [
                    'logFile' => '@runtime/log/debug.log'
                ]
            ]
        ]
    ],
];