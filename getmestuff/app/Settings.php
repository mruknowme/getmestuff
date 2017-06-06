<?php

namespace App;


use App\Mail\EmailChange;
use Carbon\Carbon;

class Settings
{
    protected $user;

    protected $info = [
        'first_name', 'last_name'
    ];

    protected $rules = [
        'first_name' => 'nullable|string|max:255',
        'last_name' => 'nullable|string|max:255',
        'current_password' => 'required'
    ];

    protected $success = 'Your profile has been updated';
    protected $error = 'You\'ve entered a wrong password';

    public function __construct (User $user)
    {
        $this->user = $user;
    }

    public function override (array $attributes)
    {
        $this->emailCheck($attributes['email']);

        $this->passwordCheck($attributes['password']);

        $this->validationCheck($attributes);

        if ($this->authorised($attributes['current_password']))
        {
            $update = array_only($attributes, $this->info);

            $update = $this->encryptPassword($update);

            $this->sendVerification($attributes);

            $this->user->update($update);

            flash($this->success);
        }
        else error($this->error);
    }

    protected function authorised ($current)
    {
        return \Hash::check($current, $this->user->getAuthPassword());
    }

    protected function validationCheck (array $data)
    {
        return \Validator::make($data, $this->rules)->validate();
    }

    protected function emailCheck ($email)
    {
        if (!is_null($email) && $email != $this->user->email)
        {
            $this->rules += ['email' => 'required|string|email|max:255|unique:users'];
        }
    }

    protected function passwordCheck ($password)
    {
        if (!is_null($password))
        {
            $this->rules += ['password' => 'required|string|min:8'];
            array_push($this->info, 'password');
        }
    }

    protected function encryptPassword($update)
    {
        if (key_exists('password', $update)) {
            $update['password'] = bcrypt($update['password']);
        }
        return $update;
    }

    protected function sendVerification(array $attributes)
    {
        if (key_exists('email', $attributes)) {
            $token = str_random(30);

            $reset = \DB::table('email_resets');
            $reset->insert([
                'user_id' => $this->user->id,
                'new_email' => $attributes['email'],
                'token' => $token,
                'created_at' => Carbon::now()
            ]);

            \Mail::to($attributes['email'])->send(new EmailChange($token));
        }
    }

    public function updateEmail ($token)
    {
        $reset = \DB::table('email_resets')->where('token', $token)->first();

        $this->user->newQuery()->where('id', $reset->user_id)->update(['email' => $reset->new_email]);

        \DB::table('email_resets')->where('token', $token)->delete();

        flash($this->success);
    }
}