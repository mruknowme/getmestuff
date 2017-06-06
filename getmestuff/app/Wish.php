<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wish extends Model
{
    protected $casts = [
        'address' => 'json'
    ];
}
