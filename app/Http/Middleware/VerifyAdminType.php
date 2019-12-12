<?php

namespace App\Http\Middleware;

use Closure;

class VerifyAdminType
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

        $user = $request->session()->get('user');
        if( $user->type == 'admin'){
            return $next($request);
        }
    }
}
