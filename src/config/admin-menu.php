<?php

return [
    'model'          => [
        'admin-menu' => VCComponent\Laravel\Config\Entities\AdminMenuConfiguration::class,
    ],
    'auth_middleware' => [
        'admin'    => [
            'middleware' => 'jwt.auth',
            'except'     => [],
        ],
    ],
];
