<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Charge;
use Stripe\Customer;
use Stripe\Stripe;

class PurchasesController extends Controller
{
    public function store()
    {
        Stripe::setApiKey(config('services.stripe.secret'));

        $info = request()->all();

        $amount = $info['value'];

        $user = Customer::create([
            'email' => $info['stripeEmail'],
            'source' => $info['stripeToken']
        ]);
        try {
            $charge = Charge::create([
                'customer' => $user->id,
                'amount' => ($amount * 100 * 1.2),
                'currency' => 'usd'
            ]);
        } catch (\Exception $e) {
            return response()->json(['status' => $e->getMessage()], 422);
        }

        request()->user()->topUp($amount);
    }
}
