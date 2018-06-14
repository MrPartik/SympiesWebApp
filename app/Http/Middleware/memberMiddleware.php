<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class memberMiddleware
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
        if (null !== Auth::user()) {
            if (Auth::user()->role == "member") {
                return $next($request);
            }
            return response("Your credentials isn't authorized to access this page.", 401);
        }
        return redirect('/login');
    }
}
