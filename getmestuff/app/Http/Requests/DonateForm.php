<?php

namespace App\Http\Requests;

use App\Events\UserHasDonated;
use App\Jobs\NotifyUser;
use App\Wish;
use Illuminate\Foundation\Http\FormRequest;

class DonateForm extends FormRequest
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
            'amount' => 'required|numeric|min:1'
        ];
    }

    public function save(Wish $wish)
    {
        $diff = ($wish->amount_needed) - ($wish->current_amount);

        if (($this->amount > $this->user()->balance) || ($this->amount > $diff))
        {
            throw new \Exception('You cannot donate this amount');
        }

        event(new UserHasDonated($this->user(), $this->amount));
        dispatch(new NotifyUser($wish, $this->amount));

        $this->user()->donate($wish, $this->amount);
    }
}
