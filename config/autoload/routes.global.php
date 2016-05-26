<?php

return [
    'dependencies' => [
        'invokables' => [
            Zend\Expressive\Router\RouterInterface::class => Zend\Expressive\Router\FastRouteRouter::class,
        ],
        'factories' => [
            App\Action\User::class => App\Action\UserFactory::class,
        ],
    ],

    'routes' => [
         [
             'name' => 'user',
             'path' => '/user',
             'middleware' => App\Action\User::class,
             'allowed_methods' => ['GET'],
         ],
    ],
];
