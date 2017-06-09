<?php

namespace App\Http\Controllers;

use App\Http\Requests\DonateForm;
use App\Http\Requests\WishesForm;
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
        $id = auth()->user()->id;

        $wishes = Wish::getWishes($id);

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
     * Stores wishes
     *
     * @param WishesForm $form
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(WishesForm $form)
    {
        $form->save();

        return response(['status' => 'Wish published successfully']);
    }


    /**
     * Display the specified resource.
     *
     * @param Wish $wish
     * @param Request $request
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Support\Collection|static[]
     */
    public function show(Wish $wish, Request $request)
    {
        return $wish->getWish($request->user()->id, $request->set);
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
     * @param $find
     * @param DonateForm $form
     * @param Wish $wish
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Wish $wish, DonateForm $form)
    {
        try {
            $form->save($wish);
        } catch (\Exception $e) {
            return response()->json(
                ['amount' => [$e->getMessage()]], 422
            );
        }

        return response(['status' => 'Donated successfully']);
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
