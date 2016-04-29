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
        $events->listen('Aacotroneo\Saml2\Events\Saml2LoginEvent', function (Saml2LoginEvent $event) {
            $user = $event->getSaml2User();
            $userData = [
                'id' => $user->getUserId(),
                'attributes' => $user->getAttributes(),
                'assertion' => $user->getRawSamlAssertion()
            ];
            Debugbar::info($user->getAttributes());
            session(['id' => $user->getUserId()]);
            session(['attributes' => $user->getAttributes()]);
            session(['assertion' => $user->getRawSamlAssertion()]);
            session(['IdPSessionIndex' => $user->getAuth()->getSessionIndex()]);
            // $_SESSION['IdPSessionIndex'] = $event->getSessionIndex();
            Debugbar::info($user->getAuth()->getSessionIndex());
            Debugbar::info($user);
            // $laravelUser = //find user by ID or attribute
             //if it does not exist create it and go on  or show an error message
            // Auth::login($userData);
        });
        $events->listen('*', function () {
            Debugbar::info(Event::firing());
        });
    }
}
