<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
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
        if (Auth::guard($guard)->check()) {


            if(Auth::user()->usertype == 'superviseur' ){

                return redirect('superviseur');
            }

            if(Auth::user()->usertype == 'inventaire' ){

                return redirect('inventaire');
            }

            if(Auth::user()->usertype == 'administarteur' ){

                return redirect('administarteur');
            }

            if(Auth::user()->usertype == 'comptable' ){

                return redirect('comptable');
            }


        }

        return $next($request);
    }
}
