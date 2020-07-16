<?php

namespace VCComponent\Laravel\Config\Providers;

use Illuminate\Support\ServiceProvider;
use VCComponent\Laravel\Config\Services\Option;

class ConfigServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any package services
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');
        $this->loadRoutesFrom(__DIR__ . '/../../routes/api.php');
        $this->publishes([
            __DIR__ . '/../../config/configuration.php' => config_path('configuration.php'),
            __DIR__ . '/../../config/option.php'        => config_path('option.php'),
        ]);

        $this->app->singleton('option', function ($app) {
            return new Option();
        });
    }

    /**
     * Register any package services
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
