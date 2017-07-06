<?php

namespace App\Mail;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Message extends Mailable
{
    use Queueable, SerializesModels;

    public $admin, $body, $user;


    /**
     * Create a new message instance.
     *
     * @param User $admin
     * @param $body
     * @param $subject
     * @param User $user
     */
    public function __construct(User $admin, $body, $subject, $user)
    {
        $this->admin = $admin;
        $this->body = $body;
        $this->subject = $subject;
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.reply')
                    ->subject($this->subject);
    }
}
