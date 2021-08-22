<?php
return [
    ['GET', '/user/{id:\d+}.html', '@goblin/controllers/errorHandler/error'],
    ['GET', '/', '@controllers/site/index'],

//    '/test' => [
//        [['GET', 'POST'], '/gg/{gid:\d+}.jsp', '@controllers/api/v1/site/index']
//    ],
];