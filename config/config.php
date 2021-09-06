<?php
$swoole = require __DIR__ . '/swoole.php';
$route = require __DIR__ . '/route.php';

return [
    // Application id.
    'id' => 'Eazy-app',
    // Aliases.
    'aliases' => [
        '@app' => APP_PATH,
        '@runtime' => APP_PATH  . '/runtime',
        '@controllers' => APP_PATH . '/controllers',
    ],
    'route' => $route,
    'bootstrap' => ['redis'],
    'components' => [
        'redis' => [
            'class' => 'toom1996\db\Redis',
            'host' => '192.168.1.4',
            'port' => 6379,
            'auth' => '',
            'db_index' => 0,
            'time_out' => 1,
            'size' => 300,
        ],
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