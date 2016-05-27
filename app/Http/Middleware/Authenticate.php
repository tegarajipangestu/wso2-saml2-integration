<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Saml2;
use URL;
use App\Action;
use DB;

class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->guest()) {
            if ($request->ajax() || $request->wantsJson()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect()->guest('/example');
                // return Saml2::login(URL::full());
            }
        }
        else {
          $user = Auth::user();
          $action = Action::where('method_type','=',$request->method())->where('uri','=',$request->route()->uri())->first();
          $authorize = DB::table('user_roles')->where('user_roles.user_id','=',$user->id)
          ->join('roles', 'roles.id','=','user_roles.role_id')
          ->join('action_roles', 'roles.id','=', 'action_roles.role_id')
          ->where('action_roles.action_id','=',$action->id)
          ->get();
          if ($authorize) {
            return $next($request);
          }
          else {
            return response('Unauthorized.', 401);
          }
        }
    }
}
