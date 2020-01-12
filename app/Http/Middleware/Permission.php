<?php

namespace App\Http\Middleware;

use Closure;

class Permission
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
        if (!isset($_SESSION)) {
            session_start();
        }

        if (empty($_SESSION['auth'])) {
            return redirect('/');
        }

        if ($_SESSION['auth']['occupation'] !== 'manager') {

            $_SESSION['error']['status'] = true;
            $_SESSION['error']['type'] = 'permission';

            return redirect('/administrative');
        }

        return $next($request);
    }
}
