<?php


namespace App\Traits;

use App\User;

trait UserAchievements
{
    protected $prize = 0;
    protected $ref_prize = 0;

    public function recordAchievements($amount, $ref = null)
    {
        $achievements = collect(json_decode($this->achievements, true));

        $achievements = $achievements->map(function ($item, $key) use ($amount) {
            if (4 <= $key && $key <= 14) {
                if ($item['completed'] == 1) {
                    return $item;
                } elseif ($item['has'] + $amount >= $item['need']) {
                    $item['has'] = $item['need'];
                    $item['completed'] = 1;
                    $this->prize += $item['prize'];
                } else {
                    $item['has'] += $amount;
                }
            } elseif (15 <= $key && $key <= 17) {
                if ($item['need'] <= $amount) {
                    $item['has'] = 0;
                    $this->prize += $item['prize'];
                } elseif ($item['has'] < $amount && $item['need'] > $amount) {
                    $item['has'] = $amount;
                }
            }
            return $item;
        })->toJson();

        if (!is_null($ref)) {
            $referral = User::query()->where('ref_link', '=', $ref)->first();

            $refAchievements = collect(json_decode($referral->achievements, true));

            $refAchievements = $refAchievements->map(function ($item, $key) {
                if ($key > 17) {
                    if ($item['completed'] == 1) {
                        return $item;
                    } elseif ($item['has'] + 1 >= $item['need']) {
                        $item['has'] = $item['need'];
                        $item['completed'] = 1;
                        $this->ref_prize += $item['prize'];
                    } else {
                        $item['has'] += 1;
                    }
                }
                return $item;
            })->toJson();

            $referral->achievements = $refAchievements;
            $referral->points += $this->ref_prize;
            $referral->save();
        }

        $this->points += $this->prize;
        $this->achievements = $achievements;
        $this->save();
    }

    public function clearAchievements()
    {
        $achievements = collect(json_decode($this->achievements, true));

        $achievements = $achievements->map(function ($item) {
            if ($item['renew'] == 1) {
                $item['has'] = 0;
                $item['completed'] = 0;
            }
            return $item;
        })->toJson();

        $this->achievements = $achievements;
        $this->save();
    }
}