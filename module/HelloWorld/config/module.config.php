<?php
use HelloWorld\Controller\HelloWorldController;
use Zend\ServiceManager\Factory\InvokableFactory;
use Zend\Router\Http\Literal;

return [
    'console' => [
        'router' => [
            'routes' => [
                'hello' => [                    
                    'options' => [
                        'route' => 'hello-world [--name=]',
                        'defaults' => [
                            'controller' => HelloWorldController::class,
                            'action' => 'hello'
                        ]
                    ]
                ]
            ]
        ]
    ],
    'controllers' => [
        'factories' => [
            HelloWorldController::class => InvokableFactory::class
        ]
    ]
];