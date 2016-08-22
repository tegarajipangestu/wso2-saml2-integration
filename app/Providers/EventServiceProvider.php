<?php

namespace App\Providers;

use Illuminate\Contracts\Events\Dispatcher as DispatcherContract;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Event;
use Debugbar;
use Aacotroneo\Saml2\Events\Saml2LoginEvent;
use Illuminate\Http\Request;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'Aacotroneo\Saml2\Events\Saml2LoginEvent' => [
            'App\Listeners\Saml2LoginListener',
        ],
        'Aacotroneo\Saml2\Events\Saml2LogoutEvent' => [
            'App\Listeners\Saml2LogoutListener',
        ],
    ];

    /**
     * Register any other events for your application.
     *
     * @param  \Illuminate\Contracts\Events\Dispatcher  $events
     * @return void
     */
    public function boot(DispatcherContract $events)
    {
        parent::boot($events);
        $events->listen('*', function () {
        });
    }
}
