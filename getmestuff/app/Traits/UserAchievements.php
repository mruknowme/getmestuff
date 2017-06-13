<?php


namespace App\Traits;

trait UserAchievements
{
    protected $ongoing = [4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14];
    protected $onetime = [15, 16, 17];

    public function recordAchievements($amount)
    {
        $achievements = json_decode($this->achievements, true);
        $set_1 = array_intersect_key($achievements, array_flip($this->ongoing));
        $set_2 = array_intersect_key($achievements, array_flip($this->onetime));
        $points = 0;

        list($set_2, $points) = $this->singleAchievements($amount, $set_2, $points);
        list($set_1, $points) = $this->flowingAchievements($amount, $set_1, $points);

        $achievements = $set_1 + $set_2 + $achievements;

        $this->points += $points;
        $this->achievements = json_encode($achievements);
        $this->save();
    }

    protected function singleAchievements($amount, $set_2, $points): array
    {
        foreach ($set_2 as $var => $item) {
            if ($item['need'] <= $item['has'] + $amount) {
                $item['has'] = 0;
                $item['completed'] = 0;
                $set_2[$var] = $item;

                $points += $item['prize'];
                continue;
            }

            if ($item['has'] >= $amount) continue;

            $item['has'] = $amount;
            $set_2[$var] = $item;
        }

        return array($set_2, $points);
    }

    protected function flowingAchievements($amount, $set_1, $points): array
    {
        foreach ($set_1 as $key => $data) {
            if ($data['completed'] == 1) continue;
            if ($data['need'] <= $data['has'] + $amount) {
                $data['has'] = $data['need'];
                $data['completed'] = 1;
                $set_1[$key] = $data;

                $points += $data['prize'];
                continue;
            }

            $data['has'] += $amount;
            $set_1[$key] = $data;
        }
        return array($set_1, $points);
    }
}