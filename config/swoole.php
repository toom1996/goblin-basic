<?php

return [
    'http' => [
        'host' => "0.0.0.0",
        'port' => 9502,
        'event' => [
            \toom1996\event\SwooleEvent::SWOOLE_ON_START => [\toom1996\http\StartCallback::class, 'onStart'],
        ],
        'setting' => [
//        'enable_static_handler' => APP_DEBUG,
//        'document_root' => APP_PATH . '/web',
            'worker_num' => swoole_cpu_num(),
            'enable_coroutine' => true,
            'hook_flags' => SWOOLE_HOOK_ALL,
            'daemonize' => false,
            'log_file' => APP_PATH . '/runtime/http.log',
            'pid_file' => APP_PATH . '/runtime/server.pid',
        ],
    ]
];