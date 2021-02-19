<?php
return [
    'cache'           => [
        'enabled' => true,
        'minutes' => 5,
    ],
    'model'          => [
        'option' => VCComponent\Laravel\Config\Entities\Option::class,
    ],
    'auth_middleware' => [
        'admin_view'   => [
            // [
            //     'middleware' => '',
            //     'except'     => [],
            // ],
        ],
        'admin_create' => [
            // [
            //     'middleware' => '',
            //     'except'     => [],
            // ],
        ],
        'admin_update' => [
            // [
            //     'middleware' => '',
            //     'except'     => [],
            // ],
        ],

    ],
];
