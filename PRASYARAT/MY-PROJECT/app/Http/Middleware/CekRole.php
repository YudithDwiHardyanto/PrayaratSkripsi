<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CekRole
{
    public function handle($request, Closure $next, ...$roles)
    {
        if (!Auth::check()) {
            return redirect('/Login');
        }

        $user = Auth::user();
        if (in_array($user->level, $roles)) {
            return $next($request);
        }

        return redirect('/HomeUser');
    }
}
