<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdminMiddleWare
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        switch (true) {
            case Auth::check() && Auth::user()->is_admin == 1:
                return $next($request);

            case Auth::check():
                Auth::logout();
                return redirect(url(''));

            default:
                Auth::logout();
                return redirect(url(''));
        }
    }
}
