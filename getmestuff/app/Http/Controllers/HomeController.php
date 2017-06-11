<?php

namespace App\Http\Controllers;

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

        return view('userpage', [
            'random' => $random,
            'ref_count' => $ref_count
        ]);
    }
}
