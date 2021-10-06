<?php

namespace VCComponent\Laravel\Config\Http\Controllers\Api\Settings;

use App\Entities\Post;
use Exception;
use Illuminate\Routing\Controller as BaseController;
use VCComponent\Laravel\Config\Entities\AdminMenuConfiguration;
use VCComponent\Laravel\Config\Entities\Option;

class GetAppSettingConfigController extends BaseController
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
        $settings = [];
        $settings['dashboard'] = config('app-dashboard');
        return response()->json($settings);
    }
}
