<?php

namespace App\Http\Requests\Admin;

use App\Achievement;
use Illuminate\Foundation\Http\FormRequest;

class NewAchievementForm extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user() && $this->user()->isAdmin();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|string|min:1|unique:achievements,title',
            'description' => 'required|string|min:1',
            'need' => 'required|numeric|min:1',
            'reward' => 'required|numeric|min:1',
            'refresh' => 'required|numeric',
            'type' => 'required|numeric'
        ];
    }

    public function save()
    {
        $set = [];
        $data = $this->only(['title', 'description', 'need', 'reward', 'refresh', 'type']);

        $set['title'] = $data['title'];
        $set['description'] = $data['description'];
        $set['need'] = $data['need'];
        $set['prize'] = $data['reward'];
        $set['renew'] = $data['refresh'];
        $set['type'] = $data['type'];

        Achievement::create($set);
    }
}
