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

        $settingsGroup = collect($settingsGroup)->map(function ($item) {
            return collect($item)->only('id', 'data', 'setting')->map(function ($data, $key) {
                if ($key == 'data') return $data[0];
                return $data;
            });
        })->keyBy('setting');

        return $settingsGroup;
    }
}
