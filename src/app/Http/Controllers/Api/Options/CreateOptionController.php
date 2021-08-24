<?php

namespace VCComponent\Laravel\Config\Http\Controllers\Api\Options;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use VCComponent\Laravel\Config\Entities\Option;

class CreateOptionController extends BaseController
{
    public function __construct()
    {
        if (!empty(config('option.auth_middleware.admin_create'))) {
            foreach (config('option.auth_middleware.admin_create') as $middleware) {
                $this->middleware($middleware['middleware'], ['except' => $middleware['except']]);
            }
        }
        else{
            throw new Exception("Admin middleware configuration is required");
        }
    }

    public function __invoke(Request $request)
    {
        $option = Option::create($request->all());

        return response()->json([
            'data' => $option,
        ]);
    }
}
