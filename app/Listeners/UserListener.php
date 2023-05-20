<?php

namespace App\Listeners;

use App\Mail\QueueMail;
use App\Events\UserEvent;
use App\Jobs\UserRegister;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserListener
{

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\UserEvent  $event
     * @return void
     */
    public function handle(UserEvent $event)
    {

        UserRegister::dispatch(request()->all())->delay(now()->addSeconds(10));
    }
}
