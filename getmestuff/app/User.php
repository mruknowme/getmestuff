<?php

namespace App;

use App\Notifications\ResetPasswordNotification;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password', 'token', 'ip_address'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }

    public function confirmEmail() {
        $this->verified = true;
        $this->token = null;

        $this->save();
    }

    public function canUpdate($input) {
        return \Hash::check($input, \Auth::user()->getAuthPassword());
    }
}
