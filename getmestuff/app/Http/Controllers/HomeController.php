<?php

namespace App\Http\Controllers;

use App\Achievement;
use App\Events\AchievementsOutdated;
use App\Http\Requests\PrizesForm;
use App\Traits\UserAchievements;
use App\User;
use App\Wish;
use App\Prize;
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
        $refresh = cache(User::cacheKey());
        if (!is_null($refresh) && $refresh->lte(Carbon::now())) {
            event(new AchievementsOutdated(auth()->user()));
        }

        $random = Wish::getWishes(auth()->user()->id, 1);
        $ref_count = User::getRefs();
        $achievements = Achievement::all();
        $prizes = Prize::all();

        return view('userpage', [
            'random' => $random,
            'ref_count' => $ref_count,
            'achievements' => $achievements,
            'prizes' => $prizes
        ]);
    }

    public function prizes(PrizesForm $form)
    {
        try {
            $form->save();
        } catch (\Exception $e) {
            return response()->json(
                ['message' => [$e->getMessage()]], 422
            );
        }

        return response(['status' => 'Points redeemed successfully']);
    }

    public function test()
    {
        $table = explode('/', request()->path());

        $table = end($table);
        return $table;
    }
}
