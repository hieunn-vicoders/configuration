<?php

Route::name('steps.')
    ->prefix('api/step-config')
    ->namespace('VCComponent\Laravel\Config\Http\Controllers\Api')
    ->group(function () {
        Route::get('', 'Steps\GetStepConfigController')->name('get.config');
        Route::post('', 'Options\CreateOrUpdateOptionController')->name('save.config');
    });

Route::name('options.')
    ->prefix('api/options')
    ->namespace('VCComponent\Laravel\Config\Http\Controllers\Api\Options')
    ->group(function () {
        Route::post('', 'CreateOptionController')->name('create');
        Route::post('/create-or-update', 'CreateOrUpdateOptionController')->name('create-or-update');
    });

Route::name('steps.')
    ->prefix('api/settings')
    ->namespace('VCComponent\Laravel\Config\Http\Controllers\Api')
    ->group(function () {
        Route::get('', 'Settings\GetSettingConfigController')->name('setting.config');
    });
Route::name('steps.')
    ->prefix('api/app-settings')
    ->namespace('VCComponent\Laravel\Config\Http\Controllers\Api')
    ->group(function () {
        Route::get('', 'Settings\GetAppSettingConfigController')->name('setting.config');
    });
