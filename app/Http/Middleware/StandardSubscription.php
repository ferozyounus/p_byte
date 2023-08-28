<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\UserSubscription;
use Auth;
class StandardSubscription
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
        $subscriptionCheckStandard =UserSubscription::where('user_id',Auth::user()->id)->where('subscriptions_id','2')->get();
        if($subscriptionCheckStandard->count() >=1){
            return $next($request);
        }
         return redirect()->route('profiles.listing');
    }
}
