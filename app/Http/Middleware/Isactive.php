<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Isactive
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        
        if (Auth::check()) {
            // Check if the user is active (you can define your own logic here)
            if (Auth::user()->status == 1) {
                return $next($request);
            } else {
                // Redirect or respond with an error if the user is not active
                return redirect()->route('inactive_account');
            }
        }

        return $next($request);
    }
}
