<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class WishesControllerr extends Controller
{
    public function all()
    {
        return view('admin.wishes.wishes_all');
    }

    public function reported()
    {
        return view('admin.wishes.wishes_all');
    }

    public function settings()
    {
        return view('admin.wishes.wishes_settings');
    }
}
