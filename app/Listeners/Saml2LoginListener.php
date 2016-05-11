<?php

namespace App\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Session;
use Aacotroneo\Saml2\Events\Saml2LoginEvent;
use App\User;
use Auth;

class Saml2LoginListener
{
    const CLAIM_USERNAME = "username";
    const CLAIM_EMAIL_ADDRESS = "email";
    const CLAIM_ROLE = "role";
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    private function getClaimOrDefault($attributes, $claimKey, $default = 'N/A')
    {
        if (array_key_exists($claimKey, $attributes)) {
            return $attributes[$claimKey][0];
        }
        return $default;
    }
      
    /**
     * Handle the event.
     *
     * @param  Saml2LoginEvent  $event
     * @return void
     */
    public function handle(Saml2LoginEvent $event)
    {
        $user = $event->getSaml2User();
        $attributes = $user->getAttributes();
        $profile = array(
          'saml_id' => $user->getUserId(),
          'email' => $this->getClaimOrDefault($attributes, self::CLAIM_EMAIL_ADDRESS),
          'role' => $this->getClaimOrDefault($attributes, self::CLAIM_ROLE),
          'session_index' => $user->getSessionIndex()
        );

        $laravelUser = User::updateOrCreate($profile);
        Session::put('session_index', $user->getSessionIndex());

        Auth::login($laravelUser);
    }
}
