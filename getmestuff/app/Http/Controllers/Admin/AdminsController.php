<?php

namespace App\Http\Controllers\Admin;

use App\GlobalSettings;
use App\Http\Controllers\Controller;

class AdminsController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function settings()
    {
        $settings = GlobalSettings::getGeneralSetting();

        return view('admin.settings', compact('settings'));
    }

    public function payment()
    {
        return view('admin.payment');
    }
}
