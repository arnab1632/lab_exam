<?php

namespace App\Http\Middleware;

use Closure;

class VerifyCustomerType
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
        if( $user->type == 'customer'){
            return $next($request);
        }
		else{
            return redirect()->route('home.index');
        }
        
    }
}
