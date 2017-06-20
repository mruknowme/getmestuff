<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $notifications = auth()->user()->notifications
            ->groupBy(function ($item) {
                return $item->created_at->format('y-m-d');
            });

        $notifications = $notifications->map(function ($item) {
            return $item->groupBy(function ($item) {
                return $item['data']['wish'];
            })->map(function ($item) {
                return collect($item);
            });
        });

        $notifications = $notifications->map(function ($item) {
            return $item->map(function ($item) {
                return $item->map(function ($item) {
                    return $item->data['amount'];
                });
            });
        });

        $notifications = $notifications->map(function ($item) {
            return $item->each(function ($item) {
                $item->prepend($item->sum(), 'total');
                $item->prepend(($item->count() - 1), 'count');
            })->map(function ($item) {
                return $item->only('count', 'total');
            });
        });

        $topups = auth()->user()->payments;

        return view('notifications', compact('notifications', 'topups'));
    }
}
