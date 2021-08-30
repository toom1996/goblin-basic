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
$config = require __DIR__ . '/config/config.php';

ini_set('display_errors', 'on');
ini_set('display_startup_errors', 'on');

error_reporting(E_ALL);
date_default_timezone_set('Asia/Shanghai');

$loader = new \toom1996\GoblinLoader($config);
$http = new \Swoole\Http\Server($config['swoole']['host'], $config['swoole']['port']);
$http->set($config['swoole']['set']);
$http->on(
    "start",
    function (\Swoole\Http\Server $http) use ($loader) {
        $config = $loader->config;
        swoole_set_process_name("goblin {$http->master_pid}");
        $eazyVersion = \toom1996\http\Goblin::getVersion();
        $workerNum = isset($config['swoole']['set']['worker_num'])?:swoole_cpu_num();
        $taskWorkerNum = isset($config['swoole']['set']['task_worker_num'])?:swoole_cpu_num();
        $daemonize = (isset($config['swoole']['set']['daemonize'])?'true':'false');
        $swooleVersion = \toom1996\helpers\ConsoleHelper::ansiFormat(SWOOLE_VERSION, [\toom1996\helpers\ConsoleHelper::BOLD, \toom1996\helpers\ConsoleHelper::FG_GREEN]);
        $phpVersion = PHP_VERSION;
        \toom1996\helpers\ConsoleHelper::beginAnsiFormat([\toom1996\helpers\ConsoleHelper::BOLD, \toom1996\helpers\ConsoleHelper::FG_GREEN]);
        echo <<<EOL
                                
    ,---,.                                      
  ,'  .' |                                      
,---.'   |                    ,----,            
|   |   .'                  .'   .`|            
:   :  |-,   ,--.--.     .'   .'  .'      .--,  
:   |  ;/|  /       \  ,---, '   ./     /_ ./|  
|   :   .' .--.  .-. | ;   | .'  /   , ' , ' :  
|   |  |-,  \__\/: . . `---' /  ;--,/___/ \: |  
'   :  ;/|  ," .--.; |   /  /  / .`| .  \  ' |  
|   |    \ /  /  ,.  | ./__;     .'   \  ;   :  
|   :   .';  :   .'   \;   |  .'       \  \  ;  
|   | ,'  |  ,     .-./`---'            :  \  \ 
`----'     `--`---'                      \  ' ; 
                                          `--`  
Eazy Framework Version {$eazyVersion}

Listen address  {$config['swoole']['host']}
Listen port     {$config['swoole']['port']}
Worker num      {$workerNum}
Task worker num {$taskWorkerNum}
Daemonize       {$daemonize}
Php version     {$phpVersion}
Swoole version  {$swooleVersion}
EOL;
        \toom1996\helpers\ConsoleHelper::endAnsiFormat();
    }
);
$http->on(
    "request",
    function (\Swoole\Http\Request $request, \Swoole\Http\Response $response) use ($loader, $http) {
//                        return $response->end("<h1>~~~~~~</h1>\n");
        $loader->load(\toom1996\http\Goblin::class, $request, $response)->run($request, $response);
    }
);

$http->start();