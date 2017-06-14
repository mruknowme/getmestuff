<?php

namespace App\Http\Controllers;

use App\Achievement;
use App\Events\AchievementsOutdated;
use App\User;
use App\Wish;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $last_online = cache(User::cacheKey())->addMonth();
        if ($last_online->lt(Carbon::now())) {
            event(new AchievementsOutdated(auth()->user()));
        }

        $random = Wish::getWishes(auth()->user()->id, 1);
        $ref_count = User::getRefs();
        $achievements = Achievement::all();

        return view('userpage', [
            'random' => $random,
            'ref_count' => $ref_count,
            'achievements' => $achievements,
        ]);
    }

    public function test()
    {
        dd(User::clearAchievements(22));
    }
}
