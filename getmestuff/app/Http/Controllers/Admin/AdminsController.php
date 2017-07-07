<?php

namespace App\Http\Controllers\Admin;

use App\Country;
use App\GlobalSettings;
use App\Http\Controllers\Controller;

class AdminsController extends Controller
{
    public function index()
    {
        $visits = Country::getVisits();
        $colors = [
            'info', 'success', 'danger', 'warning', 'primary', 'inverse'
        ];

        return view('admin.dashboard', [
            'visits' => $visits,
            'colors' => $colors
        ]);
    }

    public function settings()
    {
        $settings = GlobalSettings::getGeneralSetting();

        return view('admin.settings', compact('settings'));
    }

    public function payment()
    {
        $settings = GlobalSettings::getSettingsGroup(['commissions', 'turn_on/of_payment_systems']);

        return view('admin.payment', compact('settings'));
    }
}
