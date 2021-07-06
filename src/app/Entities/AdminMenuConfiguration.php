<?php

namespace VCComponent\Laravel\Config\Entities;

use Illuminate\Database\Eloquent\Model;

class AdminMenuConfiguration extends Model
{
    
    protected $fillable = [
        'value',
    ];

    public function __construct()
    {
        if (config('admin-menu.model.admin-menu')) {
            $this->entity = config('admin-menu.model.admin-menu');
        } else {
            $this->entity = AdminMenuConfiguration::class;
        }
    }

    public static function getAdminMenuConfiguration()
    {
        return json_decode(static::first()->value);
    }

}
