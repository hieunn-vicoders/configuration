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

    }

}
