<?php

namespace App\Jobs;

use App\Mail\EmailChange;
use App\Mail\EmailConfirmation;
use App\User;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class SendVerificationEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $user;
    protected $newEmail;
    protected $register;


    /**
     * SendVerificationEmail constructor.
     *
     * @param User $user
     * @param null $email
     * @param bool $register
     */
    public function __construct(User $user, $email = null, $register = false)
    {
        $this->user = $user;
        $this->newEmail = $email;
        $this->register = $register;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        if ($this->register) {
            \Mail::to($this->user->email)->send(new EmailConfirmation($this->user));
        } else {
            $token = str_random(30);

            \DB::table('email_resets')
                ->insert([
                    'user_id' => $this->user->id,
                    'new_email' => $this->newEmail,
                    'token' => $token,
                    'created_at' => Carbon::now()
                ]);

            \Mail::to($this->newEmail)->send(new EmailChange($token));
        }
    }
}
