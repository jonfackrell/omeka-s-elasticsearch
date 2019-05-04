<?php
namespace Elasticsearch;

return [
    'controllers' => [
        'factories' => [
            'Elasticsearch\Controller\Index' => Service\Controller\IndexControllerFactory::class,
        ],
    ],
    'router' => [
        'routes' => [
            'admin' => [
                'child_routes' => [
                    'elasticsearch' => [
                        'type' => 'Literal',
                        'options' => [
                            'route' => '/elasticsearch',
                            'defaults' => [
                                '__NAMESPACE__' => 'Elasticsearch\Controller',
                                'controller' => 'Index',
                                'action' => 'index',
                            ],
                        ],
                        'may_terminate' => true,
                    ],
                ],
            ],
        ],
    ],
    'navigation' => [
        'AdminModule' => [
            [
                'label' => 'Elasticsearch',
                'route' => 'admin/elasticsearch',
                'resource' => 'Elasticsearch\Controller\Index',
                'pages' => [
                    [
                        'label' => 'Import', // @translate
                        'route' => 'admin/elasticsearch',
                        'resource' => 'Elasticsearch\Controller\Index',
                        'visible' => false,
                    ],
                ],
            ],
        ],
    ],
];