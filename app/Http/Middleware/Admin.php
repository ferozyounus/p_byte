<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Admin
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
        if(auth()->check()){
            if((auth()->user()->role->slug != 'admin')){
                $notification = array(
                    'message' => 'Access denied',
                    'alert-type' => 'error'
                );
                return redirect('/')->with($notification);
            }
        }
        return $next($request);
    }



    
}
