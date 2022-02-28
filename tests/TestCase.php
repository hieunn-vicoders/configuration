<?php

namespace VCComponent\Laravel\Config\Test;

use Orchestra\Testbench\TestCase as OrchestraTestCase;
use VCComponent\Laravel\Config\Providers\ConfigServiceProvider;

class TestCase extends OrchestraTestCase
{
    /**
     * Load package service provider
     *
     * @param  \Illuminate\Foundation\Application $app
     *
     * @return HaiCS\Laravel\Generator\Providers\GeneratorServiceProvider
     */
    protected function getPackageProviders($app)
    {
        return [
            ConfigServiceProvider::class,
        ];
    }

    /**
     * Setup the test environment.
     */
    protected function setUp(): void
    {
        parent::setUp();
        $this->withFactories(__DIR__ . '/../src/database/factories');
        // $this->loadMigrationsFrom(__DIR__ . '/../src/database/migrations');
    }

    /**
     * Define environment setup.
     *
     * @param  \Illuminate\Foundation\Application  $app
     * @return void
     */
    protected function getEnvironmentSetUp($app)
    {
        // Setup default database to use sqlite :memory:
        $app['config']->set('database.default', 'testbench');
        $app['config']->set('database.connections.testbench', [
            'driver' => 'sqlite',
            'database' => ':memory:',
            'prefix' => '',
        ]);
        $app['config']->set('configuration', [
            [
                'label' => 'step1',
                'inputs' => [
                    [
                        'label' => 'input 1',
                        'key' => 'input1',
                        'type' => 'text',
                    ],
                    [
                        'label' => 'input 2',
                        'key' => 'input2',
                        'type' => 'textarea',
                    ],
                    [
                        'label' => 'input 3',
                        'key' => 'input3',
                        'type' => 'image',
                    ],
                ],
            ],
        ]);
        $app['config']->set('option.auth_middleware', [
            'admin_create' => [
                [
                    'middleware' => '',
                    'except' => [],
                ],
            ],
            'admin_update' => [
                [
                    'middleware' => '',
                    'except' => [],
                ],
            ],
        ]);
        $app['config']->set('settings.auth_middleware', [
            'admin' => [
                [
                    'middleware' => '',
                    'except' => [],
                ],
            ],
        ]);
        $app['config']->set('admin-menu', [
            'vi' => [
                [
                    "title" => "Tổng quan",
                    "icon" => ["icon" => "dashboard", "pack" => "social-networks"],
                    "modules" => "dashboard",
                    "link" => '/admin/dashboard',
                ],
            ],
            'en' => [
                [
                    "title" => "Dashboard",
                    "icon" => ["icon" => "dashboard", "pack" => "social-networks"],
                    "modules" => "dashboard",
                    "link" => '/admin/dashboard',
                ],
            ],
        ]);
        $app['config']->set('admin-setting', [
            'vi' => [
                'sections' => [
                    [
                        "label" => "Bài viết",
                        "order" => 3,
                        "widgets" => [
                            [
                                "label" => "Cấu hình bài viết",
                                "description" => "Quản lý những tài khoản có thể truy cập vào trang quản trị để chỉnh sửa dữ liệu được hiển thị trên website.",
                                "order" => 1,
                                "url" => "/admin/posts/schema-posts",
                                "icon" => "assets/images/icon/Mask Group 262.svg",
                            ],
                        ],
                    ],
                ],
            ],
            'en' => [
                'sections' => [
                    [
                        "label" => "Post",
                        "order" => 3,
                        "widgets" => [
                            [
                                "label" => "Setting post",
                                "description" => "lorem",
                                "order" => 1,
                                "url" => "/admin/posts/schema-posts",
                                "icon" => "assets/images/icon/Mask Group 262.svg",
                            ],
                        ],
                    ],
                ],
            ],
        ]);
        $app['config']->set('dashboard', [
            'vi' => [
                'sections' => [
                    [
                        "label" => "Thiết lập",
                        "order" => 4,
                        "widgets" => [
                            [
                                "label" => "Cấu hình nhanh",
                                "type" => "shortcut",
                                "order" => 2,
                                "url" => "/admin/system/configuration",
                                "color" => "#00b894",
                                "icon" => "/assets/icons/icon-white/layer.svg",
                            ],

                        ],
                    ],
                ],
            ],
            'en' => [
                'sections' => [
                    [
                        "label" => "Setting",
                        "order" => 4,
                        "widgets" => [
                            [
                                "label" => "Quick configuration",
                                "type" => "shortcut",
                                "order" => 2,
                                "url" => "/admin/system/configuration",
                                "color" => "#00b894",
                                "icon" => "/assets/icons/icon-white/layer.svg",
                            ],

                        ],
                    ],
                ],
            ],
        ]);

    }

}
