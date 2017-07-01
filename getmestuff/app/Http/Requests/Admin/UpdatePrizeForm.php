<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePrizeForm extends FormRequest
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

    public function save($prize)
    {
        $data = $this->intersect('item', 'description', 'user_column', 'price');

        $prize->update($data);
    }
}
