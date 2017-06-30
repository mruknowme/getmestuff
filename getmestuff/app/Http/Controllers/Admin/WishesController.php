<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UpdateWishAddressFrom;
use App\Http\Requests\Admin\UpdateWishForm;
use App\Wish;
use Yajra\Datatables\Facades\Datatables;

class WishesController extends Controller
{
    protected $visibleForAdmins = [
        'user_id', 'url', 'address', 'priority', 'validated', 'completed', 'donated', 'updated_at'
    ];

    public function all(Wish $wish)
    {
        return Datatables::of(
            $this->refactorData(
                $this->getWishes($wish, [
                    'id', 'item', 'current_amount', 'amount_needed', 'validated', 'completed', 'created_at'
                ])
            )
        )->make(true);
    }

    public function reported(Wish $wish)
    {
        return Datatables::of(
            $this->refactorData(
                $this->getWishes(
                    $wish, ['id', 'user_id', 'item', 'validated', 'created_at'], false, ['validated', false]
                )
            )
        )->make(true);
    }

    public function address(Wish $wish)
    {
        return Datatables::of(
            $this->refactorAddressData(
                $this->getWishes($wish, ['id', 'item', 'user_id', 'address', 'created_at'], ['id', 'email'])
            )
        )->make(true);
    }

    public function settings()
    {
        return view('admin.wishes.wishes_settings');
    }

    public function update(Wish $wish, UpdateWishForm $form)
    {
        $form->save($wish);
    }

    public function updateAddress(Wish $wish, UpdateWishAddressFrom $form)
    {
        $form->save($wish);

        return response(['status' => 'Information has been saved']);
    }

    public function destroy(Wish $wish)
    {
        $wish->delete();

        return response(['status' => 'Wish has been deleted']);
    }

    protected function refactorData($wish)
    {
        return $wish->map(function ($item) {
            $data = collect($item);
            if (isset($data['created_at'])) $data['created_at'] = $item->created_at->format('d-m-Y');
            if (isset($data['updated_at'])) $data['updated_at'] = $item->updated_at->format('d-m-Y');
            return $data;
        });
    }

    protected function refactorAddressData($wish)
    {
        return $wish->map(function ($item) {
            $data = collect($item);
            $data['user'] = $data['user']['email'];
            $data['created_at'] = $item->created_at->format('d-m-Y');

            if (is_null($data['address']['address_two'])) {
                $address = $data['address']['address_one'];
            } else {
                $address = $data['address']['address_one'] . ' ' . $data['address']['address_two'];
            }

            $data['address'] = array_add($data['address'], 'address_line', $address);

            return $data;
        });
    }

    protected function getWishes(Wish $wish, $select, $with = false, $where = false)
    {
        if ($with) {
            return $wish->select($select)->with(['user' => function ($query) use ($with) {
                $query->select($with);
            }])->get()->makeVisible($this->visibleForAdmins);
        }

        if ($where) {
            return $wish->select($select)->where([$where])->get()->makeVisible($this->visibleForAdmins);
        }
        return $wish->select($select)->get()->makeVisible($this->visibleForAdmins);
    }
}
