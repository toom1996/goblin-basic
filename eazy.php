<?php
declare(strict_types=1);

/**
 * This constant defines the framework installation directory.
 */

use toom1996\http\Goblin;

defined('APP_PATH') or define('APP_PATH', __DIR__);

/**
 * Set app run mode.
 * Please replace the production environment with `false`.
 */
defined('APP_DEBUG') or define('APP_DEBUG', true);

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/vendor/toom1996/goblin/src/http/Eazy.php';
//$config = require __DIR__ . '/config/config.php';

ini_set('display_errors', 'on');
ini_set('display_startup_errors', 'on');

error_reporting(E_ALL);
date_default_timezone_set('Asia/Shanghai');

//Swoole\Runtime::enableCoroutine();
//$server = (new \toom1996\Application($config))->createServer();
//$server->application->start();
(function() {
    $config = require __DIR__ . '/config/swoole.php';
    $app = new \toom1996\Application();
    $server = $app->createServer($config);
    $server->run();
})();


//$http = new Swoole\Http\Server('0.0.0.0', 9502);
//
//$http->on('workerStart', function(Swoole\Server $server, int $workerId) {
//    spl_autoload_register(function($className) {
//        var_dump($className);
//        if (strpos($className, '\\') !== false) {
//            $classFile = \toom1996\http\Eazy::getAlias('@' . str_replace('\\', '/', $className) . '.php', false);
//            if ($classFile === false || !is_file($classFile)) {
//                return;
//            }
//        } else {
//            return;
//        }
//
//        require $classFile;
//    });
//
//    register_shutdown_function(function() {
//        var_dump(error_get_last());
//    });
//});
//
//$http->on('Request', function ($request, $response) {
//    $config = require __DIR__ . '/config/config.php';
//    (new Goblin($config, $request, $response))->run();
//});
//
//$http->start();
//
