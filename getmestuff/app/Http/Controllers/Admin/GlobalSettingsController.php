<?php

namespace App\Http\Controllers\Admin;

use App\GlobalSettings;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GlobalSettingsController extends Controller
{
    public function searchBannedWords(Request $request)
    {
        $search = collect(
            preg_grep("/{$request->search}/i", GlobalSettings::getSettings(['banned_words'])->data)
        )->flatten();

        return $search;
    }

    public function searchReplacementWords(Request $request)
    {
        $search = collect(
            preg_grep("/{$request->search}/i", GlobalSettings::getSettings(['word_replacements'])->data)
        )->flatten();

        return $search;
    }

    public function deleteReplacementWord($item)
    {
        $settings = GlobalSettings::getSettings(['word_replacements']);
        $replacement = $settings->data;

        $key = array_search($item, $replacement);

        array_forget($replacement, $key);

        $settings->data = $replacement;
        $settings->save();

        return response(['status' => 'Item deleted successfully']);
    }

    public function addReplacementWord(Request $request)
    {
        $this->validate($request, [
            'item' => 'required|string|uniquearray:5'
        ]);
        $settings = GlobalSettings::getSettings(['word_replacements']);
        $replacement = $settings->data;

        array_push($replacement, $request->item);

        $settings->data = $replacement;
        $settings->save();
    }
}
