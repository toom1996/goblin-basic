<?php
return [
    'host' => "0.0.0.0",
    'port' => 9502,
    'setting' => [
        'enable_static_handler' => APP_DEBUG,
        'document_root' => APP_PATH . '/web',
        'worker_num' => 1,
        'enable_coroutine' => true,
        'hook_flags' => SWOOLE_HOOK_ALL
    ]
];