<?php

namespace VCComponent\Laravel\Config\Entities;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{

    protected $fillable = [
        'key',
        'value',
        'label',
    ];

    public static function getOption($key)
    {
        $option = self::where('key', $key)->latest()->first();
        if ($option) {
            return $option->value;
        }
        return '';
    }

    public static function saveOption($request)
    {
        Option::create($request->all());
    }

    public static function getOptions($key)
    {
        $options    = self::whereIn('key', $key)->get();
        $arrayKey   = [];
        $arrayValue = [];
        if (count($options) > 0) {

            foreach ($options as $Option) {

                $value = $Option->key;
                $key   = $Option->value;

                array_push($arrayValue, $value);
                array_push($arrayKey, $key);
            }
            return array_combine($arrayKey, $arrayValue);
        }

        return '';
    }
}
