<?php

namespace App\Http\Requests\Admin;

use App\Ticket;
use App\User;
use Illuminate\Foundation\Http\FormRequest;

class NewTicketForm extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user() && $this->user()->isAdmin();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'users' => 'required',
            'priority' => 'required',
            'subject' => 'required',
            'body' => 'required'
        ];
    }

    public function save()
    {
        $users = User::find($this->only('users')['users']);

        $users->each(function ($user) {
            $data = $this->only('priority', 'subject', 'body');
            $unique_id = rand(100000, 999999);

            $data['unique_id'] = $unique_id;
            $data['email'] = $user->email;
            $data['user_id'] = $user->id;
            $data['is_admin'] = true;

            Ticket::create($data);
        });
    }
}
