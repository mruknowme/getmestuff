<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'user_id', 'braintree_id', 'successful', 'amount', 'interest'
    ];

    protected $hidden = [
        'braintree_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function recordTransaction($userId, $braintreeId, $successful, $amount)
    {
         return static::create([
                    'user_id' => $userId,
                    'braintree_id' => $braintreeId,
                    'successful' => $successful,
                    'amount' => $amount,
                    'interest' => ($amount * 1.2 - $amount)
                ]);
    }
}
