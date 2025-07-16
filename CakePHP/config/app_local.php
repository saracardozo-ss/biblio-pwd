<?php
return [
    'debug' => filter_var(env('DEBUG', true), FILTER_VALIDATE_BOOLEAN),

    'Security' => [
        'salt' => env('SECURITY_SALT', '75e7a82d2d78f2d6abe2feb26d99ff6a8086b3c1f0577fa469f5fae7a029252f'),
    ],

    'Datasources' => [
        'default' => [
            'host' => 'localhost',
            'username' => 'root',
            'password' => '',
            'database' => 'cake_cms',
            'driver' => 'Cake\Database\Driver\Mysql',
            'encoding' => 'utf8mb4',
            'timezone' => 'UTC',
            'cacheMetadata' => true,
            'log' => false,
            'url' => env('DATABASE_URL', null),
        ],
        'test' => [
            'host' => 'localhost',
            //'port' => 'non_standard_port_number',
            'username' => 'my_app',
            'password' => 'secret',
            'database' => 'test_myapp',
            //'schema' => 'myapp',
            'url' => env('DATABASE_TEST_URL', 'sqlite://127.0.0.1/tmp/tests.sqlite'),
        ],
    ],

    'EmailTransport' => [
        'default' => [
            'host' => 'localhost',
            'port' => 25,
            'username' => null,
            'password' => null,
            'client' => null,
            'url' => env('EMAIL_TRANSPORT_DEFAULT_URL', null),
        ],
    ],
];
