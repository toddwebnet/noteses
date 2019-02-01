<?php

namespace App\Http\Middleware;

use Closure;

class SecurityValidation
{
    public function handle($request, Closure $next, $guard = null)
    {
        $request = request();
        if (!is_numeric($request->session()->get('userid'))) {
            return redirect('/login');
        }
        return $next($request);
    }

}
