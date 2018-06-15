<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class guestMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (null !== Auth::user()) {
            if (Auth::user()->role != "admin" || Auth::user()->role != "member") {
                Auth::logout();
                Redirect::action('login');
            }
        }
        return $next($request);
    }
}
