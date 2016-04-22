<?php

namespace App\Listeners;

use App\Events\SamlAuthenticated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SamlAuth
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
     * @param  SamlAuthenticated  $event
     * @return void
     */
    public function handle(SamlAuthenticated $event)
    {
        //
    }
}
