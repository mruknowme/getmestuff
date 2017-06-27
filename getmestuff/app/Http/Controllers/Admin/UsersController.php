<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function all()
    {
        return view('admin.users.users_all');
    }

    public function active()
    {
        return view('admin.users.users_all');
    }

    public function settings()
    {
        return view('admin.users.users_settings');
    }
}
