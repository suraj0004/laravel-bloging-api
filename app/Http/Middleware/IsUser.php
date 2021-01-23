<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;

class IsUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check() && Auth::user()->role_id == User::ROLES["USER"]) {
            return $next($request);
        }
        return response()->json([
            "message" => "Unauthenticated."
        ], 401);
    }
}
