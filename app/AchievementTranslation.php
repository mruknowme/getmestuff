<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AchievementTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['title', 'description'];
}
