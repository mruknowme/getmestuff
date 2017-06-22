<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Mockery\CountValidator\Exception;
use App\Prize;

class PrizesForm extends FormRequest
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
            'quantity' => 'required|numeric|min:1',
            'selected' => 'required'
        ];
    }

    public function save() {
        $price = Prize::find($this->selected)->price * $this->quantity;

        if ($price > $this->user()->points) {
            throw new Exception('You don\'t have enough points');
        }

        if ($this->selected == 1) {
            $this->user()->number_of_wishes += $this->quantity;
            $this->user()->points -= $price;
        } elseif ($this->selected == 2) {
            $this->user()->priority += $this->quantity;
            $this->user()->points -= $price;
        } elseif ($this->selected == 3 && $this->user()->allowed_wishes == 2) {
            $this->user()->allowed_wishes += 1;
            $this->user()->points -= $price;
        } else {
            throw new \Exception('Unknown Error');
        }

        $this->user()->save();
    }
}
