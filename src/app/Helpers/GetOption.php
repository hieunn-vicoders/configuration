<?php

use VCComponent\Laravel\Config\Entities\Option;
use VCComponent\Laravel\Config\Services\Facades\Option as OptionService;

if (!function_exists('getOption')) {
    function getOption($key)
    {
        return OptionService::get($key);
    }
}

if (!function_exists('saveOption')) {
    function saveOption($request)
    {
        $option = Option::create($request->all());
        return response()->json([
            'data' => $option,
        ]);
    }
}

if (!function_exists('getOptions')) {
    function getOptions($key)
    {
        return Option::getOptions($key);
    }
}

if (!function_exists('prepareOption')) {
    function prepareOption($keys)
    {
        return OptionService::prepare($keys);
    }
}

