<?php

namespace VCComponent\Laravel\Config\Http\Controllers\Api\Options;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use VCComponent\Laravel\Config\Entities\Option;

class CreateOrUpdateOptionController extends BaseController
{
    public function __invoke(Request $request)
    {
        $data = [];

        collect($request->all())->each(function ($values, $label) use (&$data) {
            collect($values)->each(function ($value, $key) use (&$data, $label) {
                return $data[] = [
                    'label' => $label,
                    'key'   => $key,
                    'value' => $value,
                ];
            });
        });

        foreach ($data as $attribute) {
            Option::updateOrCreate(['key' => $attribute['key'], 'label' => $attribute['label']], $attribute);
        }

        return response()->json(['success' => true]);
    }
}
