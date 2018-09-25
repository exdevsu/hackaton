<?php

namespace App\Http\Middleware\isUser;

use Closure;
use Auth;

class isAdminUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::user()->account_type !== 1) {
            return back();
        }

        return $next($request);
    }
}
