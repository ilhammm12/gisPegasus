<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MustSuperadminAndAdmin
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::user()->role_id != 1 && Auth::user()->role_id != 2 ){
            abort(404);
        }
        return $next($request);
    }
}
