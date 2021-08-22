<?php
declare(strict_types=1);

/**
 * This constant defines the framework installation directory.
 */
defined('APP_PATH') or define('APP_PATH', __DIR__);

/**
 * Set app run mode.
 * Please replace the production environment with `false`.
 */
defined('APP_DEBUG') or define('APP_DEBUG', true);

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/vendor/toom1996/goblin/src/http/Goblin.php';
$config = require __DIR__ . '/config/config.php';

ini_set('display_errors', 'on');
ini_set('display_startup_errors', 'on');

error_reporting(E_ALL);
date_default_timezone_set('Asia/Shanghai');

// new server;
$loader = new \toom1996\GoblinLoader($config);
$http = new \Swoole\Http\Server($config['swoole']['host'], $config['swoole']['port']);
$http->set($config['swoole']['set']);
$http->on(
    "start",
    function (\Swoole\Http\Server $http) {
        swoole_set_process_name("goblin {$http->master_pid}");
    }
);
$http->on(
    "request",
    function (\Swoole\Http\Request $request, \Swoole\Http\Response $response) use ($loader, $http) {
//                        return $response->end("<h1>~~~~~~</h1>\n");
        $loader->load(\toom1996\http\Goblin::class)->run($request, $response);
    }
);

$http->start();