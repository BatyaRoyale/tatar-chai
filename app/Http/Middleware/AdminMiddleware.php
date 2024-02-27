<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
            // dd(auth()->user());
            if(!auth()->user() || (int) auth()->user()->role_id !== 2) {
                abort(403,"gbljhfc");
            }
            return $next($request);
    }
}
