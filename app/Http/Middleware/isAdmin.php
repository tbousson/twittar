<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class isAdmin
{

    public function handle($request, Closure $next)
    {
        if(Auth::user()->role_id == 1) {
            return $next($request);
        }
        
        return back();
    }
}
