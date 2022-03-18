<?php

namespace VCComponent\Laravel\Config\Http\Controllers\Api\Settings;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use VCComponent\Laravel\Config\Entities\Option;

class GetSettingConfigController extends BaseController
{
    public function __construct()
    {
        if (!empty(config('settings.auth_middleware.admin'))) {
            foreach (config('settings.auth_middleware.admin') as $middleware) {
                $this->middleware($middleware['middleware'], ['except' => $middleware['except']]);
            }
        } else {
            throw new Exception("Admin middleware configuration is required");
        }
    }

    public function __invoke(Request $request)
    {
        $settings = [];
        $settings['admin_menu'] = collect(config('admin-menu'))->map(function ($item) {
            $item['title'] = __($item['title']);
            if (!empty($item['children'])) {
                $children = collect($item['children'])->map(function ($children) {
                    $children['title'] = __($children['title']);
                    return $children;
                });
                $item['children'] = $children;
            }
            return $item;
        });
        $settings['dashboard']['sections'] = collect(config('dashboard.sections'))->map(function ($item) {
            $item['label'] = __($item['label']);
            if (!empty($item['widgets'])) {
                $widget = collect($item['widgets'])->map(function ($widget) {
                    $widget['label'] = __($widget['label']);
                    return $widget;
                });
                $item['widgets'] = $widget;
            }
            return $item;
        });
        $settings['admin_setting']['sections'] = collect(config('admin-setting.sections'))->map(function ($item) {
            $item['label'] = __($item['label']);
            if (!empty($item['widgets'])) {
                $widget = collect($item['widgets'])->map(function ($widget) {
                    $widget['label'] = __($widget['label']);
                    $widget['description'] = __($widget['description']);
                    return $widget;
                });
                $item['widgets'] = $widget;
            }
            return $item;
        });
        $steps = config('configuration');
        $options = Option::all();
        $settings['quick_settings'] = collect($steps)->map(function ($step) use ($options) {
            $has_value_inputs = collect($step['inputs'])->map(function ($input) {
                $key = $input['key'];
                $data_option = Option::where('key', $key)->first();
                if (isset($data_option->id)) {
                    $input['id'] = $data_option->id;
                }
                $input['value'] = Option::getOption($key);
                return $input;
            })->toArray();
            $step['inputs'] = $has_value_inputs;
            return $step;
        })->toArray();
        $settings['admin_multi_language'] = config('multi_language.enable');
        $settings = array_merge($settings, config('admin-section'));

        $settings['analytic']['chart'] = collect(config('admin-analytic.chart'))->map(function ($item) {
            $item['name'] = __($item['name']);
            $item['description'] = __($item['description']);
            $item['unit'] = __($item['unit']);
            $item['unit_description'] = __($item['unit_description']);
            return $item;
        });
        return response()->json($settings);
    }

}
