<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UpdateUserActivityFrom;
use App\Http\Requests\Admin\UpdateUserFrom;
use App\User;
use Yajra\Datatables\Facades\Datatables;

class UsersController extends Controller
{
    protected $visibleForAdmins = [
        'ip_address', 'verified'
    ];

    public function all(User $user)
    {
        return Datatables::of(
            $this->refactorData(
                $this->getUsers($user, [
                    'id', 'first_name', 'last_name', 'email', 'verified',
                    'balance', 'donated', 'status', 'ip_address', 'admin', 'created_at',
                ])
            )
        )->make(true);
    }

    public function activity(User $user)
    {
        return Datatables::of(
            $this->refactorData(
                $this->getUsers($user, [
                    'id', 'first_name', 'last_name', 'balance', 'points',
                    'ref_link', 'number_of_wishes', 'priority', 'amount_donated',
                    'amount_received', 'updated_at', 'created_at'
                ])
            )
        )->make(true);
    }

    public function settings()
    {
        return view('admin.users.users_settings');
    }

    public function update(User $user, UpdateUserFrom $form)
    {
        $form->save($user);

        return response(['status' => 'Row edited successfully']);
    }

    public function updateActivity(User $user, UpdateUserActivityFrom $form)
    {
        $form->save($user);

        return response(['status' => 'Row edited successfully']);
    }

    public function destroy(User $user)
    {
        $user->delete();

        return response(['status' => 'Row deleted successfully']);
    }

    protected function refactorData($user)
    {
        return $user->map(function ($item) {
            $data = collect($item);

            if (isset($data['created_at'])) $data['created_at'] = $item->created_at->format('d-m-Y');
            if (isset($data['updated_at'])) $data['updated_at'] = $item->updated_at->format('d-m-Y');
            if (isset($data['first_name']) && isset($data['last_name'])) {
                $name = $data['first_name'].' '.$data['last_name'];
                $data = array_add($data, 'name', $name);
            }
            if (isset($data['ip_address'])) $data['ip_address'] = long2ip($data['ip_address']);

            return $data;
        });
    }

    protected function getUsers(User $user, $select, $where = false)
    {
        if ($where) {
            return $user->select($select)->where([$where])->get()->makeVisible($this->visibleForAdmins);
        }
        return $user->select($select)->get()->makeVisible($this->visibleForAdmins);
    }
}
