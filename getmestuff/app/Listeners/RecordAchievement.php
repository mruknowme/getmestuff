<?php

namespace App\Listeners;

use App\Events\UserHasDonated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class RecordAchievement
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  UserHasDonated  $event
     * @return void
     */
    public function handle(UserHasDonated $event)
    {
        $event->user->balance -= $amount;
        $event->user->amount_donated += $amount;

        if ($event->user->donated == 0) {
            $temp = json_decode($event->user->achievements, true);
            $temp[1]['has'] = 1;
            $temp[1]['completed'] = 1;

            $event->user->points += $temp[1]['prize'];

            $event->user->achievements = json_encode($temp);
            $event->user->donated = 1;
        }

        $event->user->save();

        $event->user->recordAchievements($event->amount);
    }
}
