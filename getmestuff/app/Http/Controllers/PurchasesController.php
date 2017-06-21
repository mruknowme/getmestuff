<?php

namespace App\Http\Controllers;

use App\Http\Requests\WalletForm;
use Illuminate\Http\Request;

class PurchasesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return auth()->user()->payments()->paginate(7);
    }
    
    public function store(WalletForm $form)
    {
        try {
            $form->save();
        } catch (\Exception $e) {
            return response()->json(
                ['value' => [$e->getMessage()]], 422
            );
        }

        return [
            'status' => 'Success'
        ];
    }

    public function token()
    {
        return response()->json([
            'token' => \Braintree_ClientToken::generate(),
        ]);
    }
}
