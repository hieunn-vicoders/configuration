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
            __DIR__ . '/../../config/admin-menu.php'    => config_path('admin-menu.php'),
            __DIR__ . '/../../config/settings.php'      => config_path('settings.php'),
            __DIR__ . '/../../config/dashboard.php'     => config_path('dashboard.php'),
            __DIR__ . '/../../config/app-dashboard.php' => config_path('app-dashboard.php'),
            __DIR__ . '/../../config/admin-multi-language.php'      => config_path('admin-multi-language.php'),
            __DIR__ . '/../../config/admin-setting.php' => config_path('admin-setting.php'),
            __DIR__ . '/../../config/admin-section.php' => config_path('admin-section.php'),
            __DIR__ . '/../../config/admin-analytic.php' => config_path('admin-analytic.php'),
            __DIR__ . '/../../resources/lang' => base_path('/resources/lang'),
        ]);

        $this->app->singleton('option', function ($app) {
            if (config('option.model.option') === 'App\Entities\Option') {
                $option = config('option.model.option');
                return new $option;
            }
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
