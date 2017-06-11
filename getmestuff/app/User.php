<?php

namespace App;

use App\Notifications\ResetPasswordNotification;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Cashier\Billable;

class User extends Authenticatable
{
    use Notifiable, Billable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'token',
        'ip_address',
        'address',
        'number_of_wishes',
        'ref_link',
        'ref_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'ip_address', 'token', 'verified'
    ];

    protected $casts = [
        'address' => 'json'
    ];

    /**
     * @param string $token
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }

    public function confirmEmail()
    {
        $this->verified = true;
        $this->token = null;

        $this->save();
    }

    /**
     * @return Settings
     */
    public function settings()
    {
        return new Settings($this);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function wishes()
    {
        return $this->hasMany(Wish::class);
    }

    public function topUp($amount)
    {
        $this->increment('balance', $amount);
    }

    public function donate(Wish $wish, $amount)
    {
        $wish->recordDonation($this->id, $amount);

        $this->decrement('balance', $amount);
    }
}
