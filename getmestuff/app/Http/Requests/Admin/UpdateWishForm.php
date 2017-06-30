<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateWishForm extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return ($this->user() && $this->user()->isAdmin());
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'item' => 'nullable|string',
            'current_amount' => 'nullable|integer',
            'amount_needed' => 'nullable|integer',
            'validated' => 'nullable',
            'completed' => 'nullable'
        ];
    }

    public function save($wish)
    {
        $params = $this->intersect(['item', 'current_amount', 'amount_needed']);
        $bool = collect($this->only(['validated', 'completed']))->map(function ($item) {
            if ($item == '0') return false;
            else return true;
        })->toArray();

        $data = array_merge($params, $bool);

        $wish->update($data);

        return response(['status' => 'Updated Successfully']);
    }
}
