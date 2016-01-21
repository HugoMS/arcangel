<?php

namespace App\Http\Middleware;

use Closure;

class VerifyClienteToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!\Session::has('cliente_token')) {
            return redirect('login');
        }
        return $next($request);
    }
}
