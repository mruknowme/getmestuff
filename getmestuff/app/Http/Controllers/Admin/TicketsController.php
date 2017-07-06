<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Http\Requests\Admin\NewTicketForm;
use App\Http\Requests\Admin\ReplyForm;
use App\Ticket;
use App\User;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class TicketsController extends Controller
{
    public function all(Ticket $ticket)
    {
        return Datatables::of(
            $this->refactorData(
                $this->getTickets($ticket, [
                    'id', 'unique_id', 'email', 'subject', 'body', 'priority', 'type', 'created_at', 'updated_at'
                ], [
                    ['is_admin', '=', 'false']
                ])
            )
        )->make(true);
    }

    public function open(Ticket $ticket)
    {
        return Datatables::of(
            $this->refactorData(
                $this->getTickets($ticket, [
                    'id', 'unique_id', 'email', 'subject', 'body', 'priority', 'type', 'created_at', 'updated_at'
                ], [
                    ['is_admin', '=', 'false'],
                    ['type', '!=', 2]
                ])
            )
        )->make(true);
    }

    public function update(Ticket $ticket, Request $request)
    {
        $data = $request->only(['priority', 'type']);

        $ticket->priority = $data['priority'];
        $ticket->type = $data['type'];
        $ticket->save();

        return response(['status' => 'Row has been updated successfully']);
    }

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

    public function reply(Ticket $ticket, ReplyForm $form)
    {
        $form->save($ticket);

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

    protected function getTickets(Ticket $ticket, $select, $where = false)
    {
        if ($where) {
            return $ticket->select($select)->where($where)->get();
        }
        return $ticket->select($select)->get();
    }

    protected function refactorData($ticket)
    {
        return $ticket->map(function ($item) {
            $data = collect($item);

            if (isset($data['created_at'])) $data['created_at'] = $item->created_at->format('d-m-Y');
            if (isset($data['updated_at'])) $data['updated_at'] = $item->updated_at->format('d-m-Y');

            if (isset($data['type'])) {
                if ($data['type'] == 0) {
                    $data['type_slug'] = 'Open';
                } elseif ($data['type'] == 1) {
                    $data['type_slug'] = 'In Progress';
                } else {
                    $data['type_slug'] = 'Closed';
                }
            }

            if (isset($data['priority'])) {
                if ($data['priority'] == 0) {
                    $data['priority_slug'] = 'Green';
                } elseif ($data['priority'] == 1) {
                    $data['priority_slug'] = 'Yellow';
                } else {
                    $data['priority_slug'] = 'Red';
                }
            }

            return $data;
        });
    }
}
