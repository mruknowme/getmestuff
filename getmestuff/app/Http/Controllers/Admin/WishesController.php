<?php

namespace App\Http\Controllers\Admin;

use App\Filters\WishesFilter;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UpdateWishForm;
use App\Wish;
use Yajra\Datatables\Facades\Datatables;

class WishesController extends Controller
{
    public function all(Wish $wish)
    {
        $wish = $wish->newQuery()
            ->select(
                'id', 'item', 'current_amount', 'amount_needed', 'validated', 'completed', 'created_at'
            )->get();

        $wish = $this->refactorData($wish);

        $wish = Datatables::of($wish)->make(true);

        return $wish;
    }

    public function reported()
    {
        return view('admin.wishes.wishes_all');
    }

    public function settings()
    {
        return view('admin.wishes.wishes_settings');
    }

    public function update(Wish $wish, UpdateWishForm $form)
    {
        $form->save($wish);
    }

    public function destroy(Wish $wish)
    {
        $wish->delete();

        return response(['status' => 'Wish has been deleted']);
    }

    protected function refactorData($wish)
    {
        $wish = $wish->makeVisible([
            'user_id', 'url', 'address', 'priority', 'validated', 'completed', 'donated', 'updated_at'
        ])->map(function ($item) {
            return collect($item)->map(function ($attr, $key) use ($item) {
                if ($key == 'created_at') return $item->created_at->format('d-m-Y');
                elseif ($key == 'updated_at') return $item->updated_at->format('d-m-Y');
                return $attr;
            });
        });
        return $wish;
    }
}
