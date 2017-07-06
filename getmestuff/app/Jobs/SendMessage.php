<?php

namespace App\Jobs;

use App\Mail\Message;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class SendMessage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $admin, $body, $subject, $user, $email;


    /**
     * Create a new job instance.
     * @param $admin
     * @param $body
     * @param $subject
     * @param $user
     * @param $email
     */
    public function __construct($admin, $body, $subject, $user, $email = null)
    {
        $this->admin = $admin;
        $this->body = $body;
        $this->subject = $subject;
        $this->user = $user;
        $this->email = $email;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        if (is_null($this->user)) {
            \Mail::to($this->email)->send(new Message($this->admin, $this->body, $this->subject, $this->user));
        } else {
            \Mail::to($this->user)->send(new Message($this->admin, $this->body, $this->subject, $this->user));
        }
    }
}
