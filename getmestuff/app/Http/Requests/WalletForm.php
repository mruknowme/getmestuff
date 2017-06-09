<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Stripe\Charge;
use Stripe\Customer;
use Stripe\Stripe;

class WalletForm extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return !! $this->user();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'stripeEmail' => 'required|email',
            'stripeToken' => 'required',
            'value' => 'required|numeric|min:2'
        ];
    }

    public function save()
    {
        Stripe::setApiKey(config('services.stripe.secret'));

        $user = Customer::create([
            'email' => $this->stripeEmail,
            'source' => $this->stripeToken
        ]);

        $charge = Charge::create([
            'customer' => $user->id,
            'amount' => ($this->value * 100 * 1.2),
            'currency' => 'usd'
        ]);

        $this->user()->topup($this->value);
    }
}
