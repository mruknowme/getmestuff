<?php

namespace App\Http\Controllers\Admin;

use App\Achievement;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UpdateAchievementForm;
use Yajra\Datatables\Facades\Datatables;

class AchievementsController extends Controller
{
    protected $visibleForAdmins = [];

    public function all(Achievement $achievement) {
        return Datatables::of(
            $this->refactorData(
                $this->getAchievements($achievement, [
                    'id', 'title', 'description', 'need', 'prize',
                    'renew', 'type'
                ])
            )
        )->make(true);
    }

    public function new() {
        return view('admin.achievements.achievements_new');
    }

    public function settings() {
        return view('admin.achievements.achievements_settings');
    }

    public function update(Achievement $achievement, UpdateAchievementForm $form)
    {
        $form->save($achievement);

        return response(['status' => 'Row updated successfully']);
    }

    public function destroy(Achievement $achievement)
    {
        $achievement->delete();

        return response(['status' => 'Row deleted successfully']);
    }

    protected function refactorData($achievements)
    {
        return $achievements->map(function ($item) {
            $data = collect($item);

            if ($data['renew'] == 0) {
                $data['renew_slug'] = 'None';
            } elseif ($data['renew'] == 1) {
                $data['renew_slug'] = 'Monthly';
            } else {
                $data['renew_slug'] = 'Instant';
            }

            return $data;
        });
    }

    protected function getAchievements(Achievement $achievement, $select, $where = false)
    {
        if ($where) {
            return $achievement->select($select)->where([$where])->get()->makeVisible($this->visibleForAdmins);
        }
        return $achievement->select($select)->get()->makeVisible($this->visibleForAdmins);
    }
}
