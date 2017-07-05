<?php

namespace App;

use App\Notifications\ResetPasswordNotification;
use App\Traits\UserAchievements;
use App\Traits\UserActions;
use Carbon\Carbon;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use Notifiable, UserActions, UserAchievements, HasApiTokens;

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
        'first_name', 'last_name', 'email', 'password', 'token',
        'verified', 'balance', 'status', 'address', 'ip_address',
        'donated', 'allowed_wishes', 'number_of_wishes', 'ref_link', 'ref_id',
        'priority', 'amount_donated', 'amount_received', 'points', 'admin'
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
        'address' => 'json',
        'admin' => 'boolean',
    ];

    /**
     * @param string $token
     */
    public function sendPasswordResetNotification($token)
    {
        $isAdmin = $this->isAdmin();
        $this->notify(new ResetPasswordNotification($token, $isAdmin));
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

    public function replies()
    {
        return $this->hasMany(Reply::class);
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
        cache()->add($key, Carbon::now()->addMonth(), Carbon::now()->addMonth()->addDay());
    }

    public static function cacheKey()
    {
        return sprintf("user.%s", auth()->id());
    }

    public function isAdmin()
    {
        return $this->admin;
    }

    public static function ban($email)
    {
        static::query()->where('email', $email)->update(['status' => 0]);
    }

    public static function unban($email)
    {
        static::query()->where('email', $email)->update(['status' => 1]);
    }
}
