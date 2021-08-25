<?php
// Defined goblin route.
return [
    // Welcome page.
    ['GET', '/', '@controllers/site/index'],

    // Multiple request methods.
    [['POST', 'DELETE'], '/site/methods', '@controllers/site/methods'],

    // Group route.
    '/site' => [
        // You can set different routes to point to the same action.
        [['GET', 'POST'], '/about.html', '@controllers/site/methods']
    ],
];