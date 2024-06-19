<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Closure;
use Session;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        if (Session::has('user.id')) {
            return null;
        } else {
            return route('home.login');
        }
        
        // return $request->expectsJson() ? null : route('home.login');
    }
    public function handle($request, Closure $next, ...$guards)
    {
        if (Session::has('user.id')&&Session::has('email')) {
            return null;
        } else {
            return route('home.login');
        }
        
        // return $this->redirectTo($request);
    }
}
