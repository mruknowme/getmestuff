<?php

namespace App\Http\Controllers\Traits;


use App\Mail\EmailChange;
use Carbon\Carbon;

trait UserSettings
{
    /**
     * @param $request
     * @return string
     */
    protected function updateProfile($request): string
    {
        $message = 'Your profile has been updated';

        $rules = $this->baseValidationRules();

        $auth = \Auth::user();

        list($first_name, $last_name, $email, $password) = $this->getRequestInfo($request, $auth);

        $params = ['first_name' => $first_name, 'last_name' => $last_name];

        if ($email && $email != $auth->email) {
            $rules += ['email' => 'required|string|email|max:255|unique:users'];
        }

        list($rules, $params) = $this->setNewPassword($password, $rules, $params);

        $this->validate($request, $rules);

        if ($email && $email != $auth->email) {
            $this->sendVerification($auth, $email);
        }

        $auth->update($params);

        return $message;
    }

    /**
     * @param $auth
     * @param $email
     */
    protected function sendVerification($auth, $email): void
    {
        $token = str_random(30);

        $reset = \DB::table('email_resets');
        $reset->insert([
            'user_id' => $auth->id,
            'new_email' => $email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        \Mail::to($email)->send(new EmailChange($token));
    }

    /**
     * @param $password
     * @param $rules
     * @param $params
     * @return array
     */
    protected function setNewPassword($password, $rules, $params): array
    {
        if ($password) {
            $rules += ['password' => 'required|string|min:8'];
            $params += ['password' => bcrypt($password)];
        }
        return array($rules, $params);
    }

    /**
     * @return array
     */
    protected function baseValidationRules(): array
    {
        return $rules = [
            'first_name' => 'nullable|string|max:255',
            'last_name' => 'nullable|string|max:255',
            'current_password' => 'required'
        ];
    }

    /**
     * @param $request
     * @param $auth
     * @return array
     */
    protected function getRequestInfo($request, $auth): array
    {
        $first_name = $request->input('first_name') ?? $auth->first_name;
        $last_name = $request->input('last_name') ?? $auth->last_name;
        $email = $request->input('email');
        $password = $request->input('password');
        return array($first_name, $last_name, $email, $password);
    }
}