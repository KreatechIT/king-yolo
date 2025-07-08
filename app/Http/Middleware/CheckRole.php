<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
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
        // Check if the authenticated user is an admin
        if (!$request->user() || !$request->user()->hasRole('admin')) {
            // If the user is not an admin, abort with 403 Forbidden
            abort(403, 'Unauthorized');
        }

        return $next($request);
    }
}