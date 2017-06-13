<?php

namespace App\Http\Controllers;

use App\Achievement;
use App\User;
use App\Wish;
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
        $random = Wish::getWishes(auth()->user()->id, 1);
        $ref_count = \DB::table('users')
            ->where([
                ['ref_id', '=', auth()->user()->ref_link],
                ['verified', '=', 1],
                ['donated', '=', 1]
            ])
            ->count();
        $achievements = Achievement::all();

        return view('userpage', [
            'random' => $random,
            'ref_count' => $ref_count,
            'achievements' => $achievements
        ]);
    }

    public function test()
    {
        $user = User::find(1);

        $temp = $user->recordAchievements(10);

        dd($temp);
    }
}
