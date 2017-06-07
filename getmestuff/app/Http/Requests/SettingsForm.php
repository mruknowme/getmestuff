<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingsForm extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return \Hash::check($this->current_password, $this->user()->password);
    }

    /**
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function getValidatorInstance()
    {
        $validator = parent::getValidatorInstance();

        $validator->sometimes('email', 'string|email|max:255|unique:users', function ($input) {
            return (!is_null($input['email']) && $input['email'] != $this->user()->email);
        });

        return $validator;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => 'nullable|string|max:255',
            'last_name' => 'nullable|string|max:255',
            'password' => 'nullable|string|min:8',
            'current_password' => 'required'
        ];
    }

    public function save()
    {
        $data = $this->intersect(['first_name', 'last_name', 'email', 'password']);

        if ($data['email'] == $this->user()->email) unset($data['email']);

        if (isset($data['password'])) $data['password'] = bcrypt($data['password']);

        $this->user()->settings()->update($data);
    }
}
