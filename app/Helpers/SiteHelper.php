<?php

namespace App\Helpers;

use App\Models\Settings;

class SiteHelper
{
    public static function getSettings($value)
    {
        $data = Settings::where('group','general-settings')->where('name', $value)->first();
        return $data->payload ?? '';
    }
   
}
