<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prize extends Model
{
    protected $fillable = [
        'item', 'description', 'price', 'bought', 'user_column'
    ];
}
