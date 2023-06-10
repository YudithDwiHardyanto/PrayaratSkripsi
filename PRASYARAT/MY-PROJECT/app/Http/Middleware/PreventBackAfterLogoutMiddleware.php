<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class PreventBackAfterLogout
{
    public function handle($request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect('/Login');
        }

        return $next($request);
    }
}
