<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAchievementForm extends FormRequest
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
            //
        ];
    }

    public function save($achievement)
    {
        $info = $this->intersect(['title', 'description', 'need', 'prize', 'type']);

        $renew = collect($this->only('renew'))->filter(function ($item) {
            return !is_null($item);
        })->toArray();

        $dataSet = array_merge($info, $renew);

        $achievement->update($dataSet);
    }
}
