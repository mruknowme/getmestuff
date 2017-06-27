<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class TicketsController extends Controller
{
    public function all() {
        return view('admin.tickets.tickets');
    }

    public function open() {
        return view('admin.tickets.tickets');
    }

    public function create() {
        return view('admin.tickets.tickets_new');
    }
}
