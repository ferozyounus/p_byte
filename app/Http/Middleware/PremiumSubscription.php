<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\UserSubscription;
use Auth;
class PremiumSubscription
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
        $subscriptionCheckPremium =UserSubscription::where('user_id',Auth::user()->id)->where('subscriptions_id','1')->get();
        if($subscriptionCheckPremium->count() >=1){
            return $next($request);
        }
        return redirect()->route('profiles.listing');
    }
}
