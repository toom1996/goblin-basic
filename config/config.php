<?php
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
    'bootstrap' => [
        'redis',
        'urlManager',
//        'controller'
    ],
    'components' => [
        'urlManager' => [
            'route' => $route
        ],
        'redis' => [
            'class' => 'toom1996\db\Redis',
            'host' => '172.17.0.3',
            'port' => 6379,
            'auth' => '',
            'db_index' => 0,
            'time_out' => 1,
            'size' => 10,
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