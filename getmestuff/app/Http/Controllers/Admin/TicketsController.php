<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Http\Requests\Admin\NewTicketForm;
use App\Ticket;
use App\User;
use Illuminate\Http\Request;

class TicketsController extends Controller
{
    public function emails(Request $request)
    {
        $emails = User::query()->where('email', 'LIKE', "{$request->q}%")
            ->paginate(10);
        return $emails;
    }

    public function show($ticket)
    {
        $tickets = Ticket::getById($ticket)->orderBy('created_at')
            ->with(['reply' => function ($query) {
                $query->with(['user' => function ($query) {
                    $query->select('id', 'first_name', 'last_name');
                }]);
            }])->get();

        return view('admin.tickets.tickets_reply', compact('tickets'));
    }

    public function new(NewTicketForm $form)
    {
        $form->save();

        return response(['status' => 'Ticket(s) created successfully']);
    }

    public function getEmails(Ticket $ticket)
    {
        if ($emails = $ticket->checkEmails()) {
            collect($emails)->each(function ($item) {
                $this->store($item);;
            });

            return response(['message' => 'Emails saved to database']);
        };

        return response(['message' => 'No new emails']);
    }

    public function store($email)
    {
        $old = Ticket::getById($email['unique_id'])->first();

        if ($old) {
            $email['priority'] = $old->priority;
            $email['user_id'] = $old->user_id;
        }

        Ticket::create($email);
    }
}
