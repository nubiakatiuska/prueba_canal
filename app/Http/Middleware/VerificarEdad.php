<?php

namespace App\Http\Middleware;

use Closure;

class VerificarEdad
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
        if ($request->age >=18) {
            return $next($request);
        }
        else {

            return redirect()->route("auth.login");
        }
        
    }
}
