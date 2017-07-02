<?php

namespace App\Http\Controllers\Admin;

use App\Achievement;
use App\GlobalSettings;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UpdateAchievementForm;
use App\Http\Requests\Admin\UpdatePrizeForm;
use App\Prize;
use Yajra\Datatables\Facades\Datatables;

class AchievementsController extends Controller
{
    protected $visibleForAdmins = [];

    public function allAchievements(Achievement $achievement) {
        return Datatables::of(
            $this->refactorData(
                $this->getData($achievement, [
                    'id', 'title', 'description', 'need', 'prize',
                    'renew', 'type', 'updated_at', 'created_at'
                ])
            )
        )->make(true);
    }

    public function allPrizes(Prize $prize) {
        return Datatables::of(
            $this->refactorData(
                $this->getData($prize, [
                    'id', 'item', 'description', 'price', 'bought',
                    'user_column', 'updated_at', 'created_at'
                ])
            )
        )->make(true);
    }

    public function create() {
        return view('admin.achievements.achievements_new');
    }

    public function settings() {
        $settings = GlobalSettings::getSettingsGroup([
            'disable_achievements'
        ]);
        return view('admin.achievements.achievements_settings', compact('settings'));
    }

    public function updateAchievement(Achievement $achievement, UpdateAchievementForm $form)
    {
        $form->save($achievement);

        return response(['status' => 'Row updated successfully']);
    }

    public function updatePrize(Prize $prize, UpdatePrizeForm $form)
    {
        $form->save($prize);

        return response(['status' => 'Row updated successfully']);
    }

    public function destroyAchievement(Achievement $achievement)
    {
        $achievement->delete();

        return response(['status' => 'Row deleted successfully']);
    }

    public function destroyPrize(Prize $prize)
    {
        $prize->delete();

        return response(['status' => 'Row deleted successfully']);
    }

    protected function refactorData($achievements)
    {
        return $achievements->map(function ($item) {
            $data = collect($item);

            if (isset($data['created_at'])) $data['created_at'] = $item->created_at->format('d-m-Y');
            if (isset($data['updated_at'])) $data['updated_at'] = $item->updated_at->format('d-m-Y');

            if (isset($data['renew'])) {
                if ($data['renew'] == 0) {
                    $data['renew_slug'] = 'None';
                } elseif ($data['renew'] == 1) {
                    $data['renew_slug'] = 'Monthly';
                } else {
                    $data['renew_slug'] = 'Instant';
                }
            }

            return $data;
        });
    }

    protected function getData($data, $select, $where = false)
    {
        if ($where) {
            return $data->select($select)->where([$where])->get()->makeVisible($this->visibleForAdmins);
        }
        return $data->select($select)->get()->makeVisible($this->visibleForAdmins);
    }
}
