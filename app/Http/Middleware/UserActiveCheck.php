<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class UserActiveCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check() && Auth::user()->preferences && !Auth::user()->preferences->is_active) {
            Auth::logout();
            return redirect()->route('login')->with(
                'login_error', 'Your account has been <b>Deactivated</b> by the Administrator. If you believe this is a mistake or need further assistance, please contact our support team.'
            );
        }

        return $next($request);
    }
}
