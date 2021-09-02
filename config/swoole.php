<?php
return [
    'host' => "0.0.0.0",
    'port' => 9502,
    'set' => [
        'enable_static_handler' => APP_DEBUG,
        'document_root' => APP_PATH . '/web',
        'worker_num' => 4
    ]
];