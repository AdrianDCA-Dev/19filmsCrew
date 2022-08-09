<?php

namespace App\Listeners;

use App\Events\RegisterUser;
use App\Notifications\RegisterUserNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification;

class RegisterUserListener
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
     * @param  object  $event
     * @return void
     */
    public function handle(RegisterUser $event)
    {
        Notification::send($event->user, new RegisterUserNotification($event->user, $event->password));
    }
}
