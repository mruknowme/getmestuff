<?php

namespace App\Http\Requests;

use App\Payment;
use Illuminate\Foundation\Http\FormRequest;

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
            'braintreeNonce' => 'required',
            'value' => 'required|numeric|min:2'
        ];
    }

    public function save()
    {
        $result = \Braintree_Transaction::sale([
            'amount' => ($this->value * 1.2),
            'paymentMethodNonce' => $this->braintreeNonce,
            'options' => [
                'submitForSettlement' => true
            ]
        ]);

        if ($result->success == false)
        {
            Payment::recordTransaction($this->user()->id, $result->transaction->id, false, $this->value);
            throw new \Exception('Your card was declined');
        }

        Payment::recordTransaction($this->user()->id, $result->transaction->id, true, $this->value);
        $this->user()->topup($this->value);
    }
}
