<?php

namespace App\Http\Requests\Admin;

use App\Prize;
use Illuminate\Foundation\Http\FormRequest;

class NewPrizeForm extends FormRequest
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
            'item' => 'required|string|min:1|unique:prizes,item',
            'description' => 'required|string|min:1',
            'price' => 'required|numeric|min:1',
            'user_column' => 'required|string',
        ];
    }

    public function save()
    {
        $data = $this->only(['item', 'description', 'price', 'user_column']);
        $data['bought'] = 0;

        Prize::create($data);
    }
}
