<?php

namespace App;


use App\Mail\EmailChange;
use Carbon\Carbon;

class Settings
{
    protected $user;

    /**
     * Settings constructor.
     * @param User $user
     */
    public function __construct (User $user)
    {
        $this->user = $user;
    }

    /**
     * @param array $attributes
     */
    public function update (array $attributes)
    {
        if (isset($attributes['email']))
        {
            $this->sendVerification($attributes['email']);

            unset($attributes['email']);
        }

        if (!empty($attributes))
        {
            $this->user->update($attributes);
        }
    }

    /**
     * @param $email
     */
    protected function sendVerification($email)
    {
        $token = str_random(30);

        \DB::table('email_resets')
            ->insert([
                'user_id' => $this->user->id,
                'new_email' => $email,
                'token' => $token,
                'created_at' => Carbon::now()
            ]);

        \Mail::to($email)->send(new EmailChange($token));
    }

    /**
     * @param $token
     */
    public function updateEmail ($token)
    {
        $reset = \DB::table('email_resets')->where('token', $token)->first();

        $this->user->newQuery()->where('id', $reset->user_id)->update(['email' => $reset->new_email]);

        \DB::table('email_resets')->where('token', $token)->delete();
    }

    /**
     * @param $address
     */
    public function saveAddress ($address)
    {
        if (is_null($this->user->address))
        {
            $this->user->update(['address' => $address]);
        }
        if (array_diff($address, $this->user->address))
        {
            $address = array_merge($this->user->address, $address);
            $this->user->update(['address' => $address]);
        }
    }
}