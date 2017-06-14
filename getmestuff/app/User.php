<?php

namespace App;

use App\Notifications\ResetPasswordNotification;
use App\Traits\UserAchievements;
use App\Traits\UserActions;
use Carbon\Carbon;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, UserActions, UserAchievements;

    public static function boot()
    {
        parent::boot();

        static::creating(function ($user) {
            $user->achievements = Achievement::getAchievementsInfo();
        });
    }

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

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public static function getRefs()
    {
        return \DB::table('users')
                    ->where([
                        ['ref_id', '=', auth()->user()->ref_link],
                        ['verified', '=', 1],
                        ['donated', '=', 1]
                    ])
                    ->count();
    }

    public static function lastOnline()
    {
        $key = sprintf("user.%s", auth()->id());
        return cache()->forever($key, Carbon::now());
    }

    public static function cacheKey()
    {
        return sprintf("user.%s", auth()->id());
    }
}
