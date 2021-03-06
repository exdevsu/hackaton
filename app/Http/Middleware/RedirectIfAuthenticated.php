<?php

namespace App\Http\Middleware;

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

            switch (Auth::user()->account_type) {
                case 1: {
                    return redirect('/admin');
                } break;
                case 2: {
                    return redirect('/manager');
                } break;
                case 3: {
                    return redirect('/merch');
                } break;
            }

        }

        return $next($request);
    }
}
