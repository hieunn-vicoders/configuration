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
        if ($request->has('language')) {
            $settings['dashboard'] = config('dashboard.' . $request['language']);
            $settings['admin_setting'] = config('admin-setting.' . $request['language']);
            $settings['admin_menu'] = config('admin-menu.' . $request['language']);
        } else {
            $settings['dashboard'] = config('dashboard.vi');
            $settings['admin_setting'] = config('admin-setting.vi');
            $settings['admin_menu'] = config('admin-menu.vi');
        }
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

        $settings['admin_multi_language'] = config('admin-multi-language.enable');

        return response()->json($settings);
    }
}
