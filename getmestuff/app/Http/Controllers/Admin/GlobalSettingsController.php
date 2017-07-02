<?php

namespace App\Http\Controllers\Admin;

use App\GlobalSettings;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GlobalSettingsController extends Controller
{
    public function search($setting, Request $request)
    {
        return $this->searchArray($request->search, $setting);
    }

    public function destroy($setting, $item)
    {
        if ($setting == 'banned_emails') {
            User::unban($item);
        }

        $this->alterArrayValue($item, $setting, true);

        return response(['status' => 'Item deleted successfully']);
    }

    public function update($setting, Request $request)
    {
        $this->validate($request, [
            'item' => 'required|string|uniquearray:5'
        ]);

        if ($setting == 'banned_emails') {
            User::ban($request->item);
        }

        $this->alterArrayValue($request->item, $setting);

        return response(['status' => 'Item added successfully']);
    }

    public function changeState($setting, Request $request)
    {
        $this->switcher($setting, $request->state);

        return response(['status' => 'State updated']);
    }

    public function changeValue($setting, Request $request)
    {
        $validation = '';
        if (is_int($request->value)) {
            $validation = 'required|numeric|min:1';
        } else {
            $validation = 'required|string|min:1';
        }

        $this->validate($request, [
            'value' => $validation
        ]);

        $settings = GlobalSettings::getSettings($setting);
        $replacement = $settings->data;

        $replacement['value'] = $request->value;

        $settings->data = $replacement;
        $settings->save();

        return response(['status' => 'Value has been updated']);
    }

    protected function searchArray($searchItem, $setting)
    {
        return collect(
            preg_grep("/{$searchItem}/i", GlobalSettings::getSettings($setting)->data)
        )->flatten();
    }

    protected function alterArrayValue($item, $setting, $delete = false)
    {
        $settings = GlobalSettings::getSettings($setting);
        $replacement = $settings->data;

        if ($delete) {
            $key = array_search($item, $replacement);
            array_forget($replacement, $key);
        } else {
            array_push($replacement, $item);
        }

        $settings->data = $replacement;
        $settings->save();
    }

    protected function switcher($setting, $state)
    {
        $settings = GlobalSettings::getSettings($setting);
        $replacement = $settings->data;

        $replacement['on'] = $state;

        $settings->data = $replacement;
        $settings->save();
    }
}
