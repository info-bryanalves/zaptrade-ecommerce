<?php

namespace App\Http\Middleware;

use Closure;

class Auth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        session_start();

        if (empty($_SESSION['auth'])) {
            $_SESSION['error']['status'] = true;
            $_SESSION['error']['type'] = 'auth';
            return redirect('/');
        }

        return $next($request);
    }
}
