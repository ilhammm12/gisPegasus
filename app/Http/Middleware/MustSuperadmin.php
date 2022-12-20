<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MustSuperadmin
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::user()->role_id != 1){
            abort(404);
        }
        return $next($request);
    }
}
