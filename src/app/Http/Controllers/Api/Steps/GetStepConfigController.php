<?php

namespace VCComponent\Laravel\Config\Http\Controllers\Api\Steps;

use Illuminate\Routing\Controller as BaseController;
use VCComponent\Laravel\Config\Entities\Option;

class GetStepConfigController extends BaseController
{
    public function __construct()
    {
        if (!empty(config('settings.auth_middleware.admin'))) {
            foreach (config('settings.auth_middleware.admin') as $middleware) {
                $this->middleware($middleware['middleware'], ['except' => $middleware['except']]);
            }
        }
        else{
            throw new Exception("Admin middleware configuration is required");
        }
    }
    public function __invoke()
    {
        $steps   = config('configuration');
        $options = Option::all();
        $steps   = collect($steps)->map(function ($step) use ($options) {
            $has_value_inputs   = collect($step['inputs'])->map(function ($input) {
                $key            = $input['key'];
                $data_option    = Option::where('key', $key)->first();
                if (isset($data_option->id)) {
                    $input['id'] = $data_option->id;
                }
                $input['value'] = Option::getOption($key);
                return $input;
            })->toArray();
            $step['inputs'] = $has_value_inputs;
            return $step;
        })->toArray();
        return response()->json($steps);
    }
}
