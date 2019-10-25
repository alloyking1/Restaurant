<?php

namespace App\Http\Middleware;

use Closure;


class AuthLayer
{
    /**
     * Handle redirection of various levels of authentication.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(auth()->user()->is_admin === 0){
            return redirect('/admin/management');
        }elseif(auth()->user()->is_admin === 1){
            return redirect('/admin/logistics');
        }elseif(auth()->user()->is_admin === 2){
            return redirect('/admin/superAdmin');
        }
        return $next($request);
    }

}
