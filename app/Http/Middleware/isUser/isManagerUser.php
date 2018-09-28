<?php

namespace App\Http\Middleware\isUser;

use Closure;
use Auth;

class isManagerUser
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
        if (Auth::user()->account_type !== 2) {
            return back();
        }

        return $next($request);
    }
}
