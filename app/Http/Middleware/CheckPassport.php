<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckPassport
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->passport) {
            return redirect()->route('passport.index')->with('error', 'Siz allaqachon passport yaratgansiz.');
        }
                return $next($request);
    }
}
