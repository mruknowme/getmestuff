<?php

namespace App;

use function GuzzleHttp\Promise\queue;
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
        return static::query()->whereIn('setting', $setting)->get();
    }

    public static function getGeneralSetting()
    {
        return static::query()->whereIn('setting', [
            'emails', 'social_media', 'banned_words', 'state'
        ])->orderBy(\DB::raw(
            'CASE setting
		            WHEN \'emails\' THEN 1
		            WHEN \'social_media\' THEN 2
		            WHEN \'banned_words\' THEN 3
		            WHEN \'state\' THEN 4
	               END'))->get();
    }
}
