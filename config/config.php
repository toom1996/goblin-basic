<?php
$swoole = require __DIR__ . '/swoole.php';
$route = require __DIR__ . '/route.php';

return [
    // Application id.
    'id' => 'goblin-http-application',
    // Application path.
    'basePath' => APP_PATH,
    // Controller path.
    // The directory where the controller files are placed.
    'controllersPath' => APP_PATH . '/controllers',
    'swoole' => $swoole,
    // Aliases.
    'aliases' => [
    ],
    'route' => $route,
    'components' => [
    ],
];