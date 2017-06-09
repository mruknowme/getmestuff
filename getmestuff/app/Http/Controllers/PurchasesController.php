<?php

namespace App\Http\Controllers;

use App\Http\Requests\WalletForm;
use Illuminate\Http\Request;

class PurchasesController extends Controller
{
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
}
