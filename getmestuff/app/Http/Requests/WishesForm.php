<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WishesForm extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'item' => 'required|string',
            'url' => 'required|url',
            'current_amount' => 'nullable|numeric|min:0',
            'amount_needed' => 'required|numeric|min:1',
            'address_one' => 'required|string',
            'address_two' => 'nullable|string',
            'city' => 'required|alpha_num',
            'post_code' => 'required|alpha_num',
            'country' => 'required|alpha_num'
        ];
    }

    public function save()
    {
        $address = [
            'address_one' => ucwords($this->address_one),
            'address_two' => ucwords($this->address_two),
            'city' => ucwords($this->city),
            'post_code' => ucwords($this->post_code),
            'country' => ucwords($this->country)
        ];

        $this->user()->settings()->saveAddress($address);

        $this->user()->wishes()->create([
            'item' => $this->item,
            'url' => $this->url,
            'current_amount' => $this->current_amount,
            'amount_needed' => $this->amount_needed,
            'address' => $address
        ]);
    }
}
