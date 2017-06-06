<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserSettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function update (Request $request)
    {
        \Auth::user()->settings()->override($request->all());

        return back();
    }

    public function edit ($token, User $user)
    {
        $user->settings()->updateEmail($token);

        return redirect('/home');
    }
}
