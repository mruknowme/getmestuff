<?php

namespace App\Http\Controllers;

use App\Wish;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class WishesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $key = sprintf("user.%s", auth()->id());

        $wishes = \Cache::remember($key, 1, function () {
            return Wish::inRandomOrder()
                        ->where('user_id', '!=', auth()->user()->id)
                        ->limit(6)
                        ->get();
        });

        return view('wishes', compact('wishes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'item' => 'required|string',
            'url' => 'required|url',
            'current_amount' => 'nullable|numeric|min:0',
            'amount_needed' => 'required|numeric|min:0',
            'address_one' => 'required|string',
            'address_two' => 'nullable|string',
            'city' => 'required|alpha_num',
            'post_code' => 'required|alpha_num',
            'country' => 'required|alpha_num'
        ]);

        $address = [
            'address_one' => ucwords(request('address_one')),
            'address_two' => ucwords(request('address_two')),
            'city' => ucwords(request('city')),
            'post_code' => ucwords(request('post_code')),
            'country' => ucwords(request('country'))
        ];

        \Auth::user()->settings()->saveAddress($address);

        $wish = Wish::create([
            'user_id' => auth()->id(),
            'item' => request('item'),
            'url' => request('url'),
            'current_amount' => request('current_amount'),
            'amount_needed' => request('amount_needed'),
            'address' => $address
        ]);

        flash('Your wish has been published');

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Wish  $wish
     * @return \Illuminate\Http\Response
     */
    public function show(Wish $wish)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Wish  $wish
     * @return \Illuminate\Http\Response
     */
    public function edit(Wish $wish)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Wish  $wish
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wish $wish)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Wish  $wish
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wish $wish)
    {
        //
    }
}
