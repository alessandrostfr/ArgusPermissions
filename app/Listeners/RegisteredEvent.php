<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class RegisteredEvent
{



    public function __construct()
    {
        //
    }


    public function handle(Registered $event)
    {
        $event->user->roles()->sync([2]);
    }


}
