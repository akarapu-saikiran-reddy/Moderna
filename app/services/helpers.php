<?php

namespace App\Services;

use App\Models\StaticOption;
use Illuminate\Support\Facades\Cache;


class Helpers
{

    // Gets array of custom key & values from Model
    public static function getKeyValues($model, $value, $key, $where_column = null, $where_id = null)
    {
        $model = "\\App\\Models\\" . $model;
        if ($where_column != null && $where_id != null) {
            $data = $model::where($where_column, $where_id)->pluck($value, $key);
        } else {
            $data = $model::all()->pluck($value, $key);
        }

        return $data;
    }

    // Create or Update Static option value in DB
    public static function set_static_option($key, $value)
    {
        if (!StaticOption::where('option_name', $key)->first()) {
            StaticOption::create([
                'option_name' => $key,
                'option_value' => $value
            ]);
            return true;
        } else {
            StaticOption::where('option_name', $key)->update([
                'option_name' => $key,
                'option_value' => $value
            ]);
            Cache::forget($key);
            return true;
        }
        return false;
    }

    // Get Static Value from DB
    public static function get_static_option($key)
    {
        global $option_name;
        $option_name = $key;
        $value = StaticOption::where('option_name', $option_name)->first();
        Cache::remember($option_name, 86400, function () {
            global $option_name;
            return StaticOption::where('option_name', $option_name)->first();
        });

        return !empty($value) ? $value->option_value : null;
    }

    // Delete Static Option with Value
    public static function delete_static_option($key)
    {
        StaticOption::where('option_name', $key)->delete();
        return true;
    }
}
