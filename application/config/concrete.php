<?php
$memcachedDriver = [
    'core_filesystem'=>[
        'class' => \Stash\Driver\Memcache::class,
        'options' => [
            'servers' => [
                [
                    'host' => 'scrn-prd-mem01.v7vom0.cfg.apne1.cache.amazonaws.com',
                    'port' => '11211',
                ],
            ],
        ]
    ]
];

return [
    // Change full page caching adapter to memcache
    'cache' => [
        'page' => [
            'adapter' => 'memcached',
            'memcached' => [
                'servers' => [
                    [
                        'host' => '<<Memcached Endpoint>>',
                        'port' => '11211',
                    ],
                ],
            ],
        ],
        'levels' => [
            'overrides' => [
                'drivers' => $memcachedDriver
            ],
            'expensive' => [
                'drivers' => $memcachedDriver
            ],
            'object' => [
                'drivers' => $memcachedDriver
            ],
        ],
    ],
    // Change session handler to memcache
    'session' => [
        'handler' => 'memcached',
        'memcached' => [
            'servers' => [
                [
                    'host' => '<<Memcached Endpoint>>',
                    'port' => '11211',
                ],
            ],
        ],
    ],
];
