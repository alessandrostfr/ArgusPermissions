<?php

namespace App\Providers;

use App\Listeners\RegisteredEvent;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * Registered users receive Laravel's default verification notification and
     * the custom listener assigns the default role.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
            RegisteredEvent::class,
        ],
    ];

    /**
     * Register any events for the application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
    }
}
