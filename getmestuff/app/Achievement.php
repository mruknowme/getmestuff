<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    public static function getAchievementsInfo ()
    {
        $temp = [];
//        $achievements = \Cache::remember('achievements', 10, function () {
//            return static::get()->all();
//        });

        $achievements = static::get()->all();

        foreach ($achievements as $achievement) {
            $temp[$achievement->id] = [
                'need' => $achievement->need,
                'has' => 0,
                'completed' => 0,
                'prize' => $achievement->prize,
                'renew' => $achievement->renew
            ];
        }

        return json_encode($temp);
    }
}
