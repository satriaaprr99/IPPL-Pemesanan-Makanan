<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleAuthorization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$role): Response
    {
        foreach ($role as $value) {
            if(Auth::user()->role_id != null){
                if (Auth::user()->role_id == $value) {
                    return $next($request);
                }
            }
        }
        return abort(401, 'This action is unauthorized.');
    }
}
