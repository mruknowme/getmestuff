<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AchievementsController extends Controller
{
    public function all() {
        return view('admin.achievements.achievements_all');
    }

    public function new() {
        return view('admin.achievements.achievements_new');
    }

    public function settings() {
        return view('admin.achievements.achievements_settings');
    }
}
