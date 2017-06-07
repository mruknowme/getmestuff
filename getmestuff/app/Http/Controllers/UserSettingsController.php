<?php

namespace App\Http\Controllers;

use App\Http\Requests\SettingsForm;
use App\User;

class UserSettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function update (SettingsForm $form)
    {
        $form->save();

        return back();
    }

    public function edit ($token, User $user)
    {
        $user->settings()->updateEmail($token);

        return redirect('/home');
    }
}
