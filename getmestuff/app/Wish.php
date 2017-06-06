<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wish extends Model
{
    protected $fillable = [
        'user_id', 'item', 'url', 'current_amount', 'amount_needed', 'address'
    ];

    protected $casts = [
        'address' => 'json'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
