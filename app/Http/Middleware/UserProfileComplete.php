<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
class UserProfileComplete
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
        if(!Auth::user()->personal_detail_check == 1 && !Auth::user()->about_me_check == 1 && !Auth::user()->education_check == 1 && !Auth::user()->work_experience_check == 1 && !isset(Auth::user()->skills)){
            return redirect()->route('profiles.listing');
        }
        return $next($request);
    }
}
