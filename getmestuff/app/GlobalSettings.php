<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GlobalSettings extends Model
{
    protected $fillable = ['setting', 'data'];

    protected $casts = [
        'data' => 'json',
    ];

    public static function getSettings($setting)
    {
        return static::query()->where('setting', $setting)->firstOrFail();
    }

    public static function getSettingsGroup($setting)
    {
        $settingsGroup = static::query();
        collect($setting)->each(function($item) use ($settingsGroup) {
            return $settingsGroup->orWhere('setting', $item);
        });

        $settingsGroup = $settingsGroup->get();

        return $settingsGroup;
    }
}
