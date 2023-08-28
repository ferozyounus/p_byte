<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subscription;
use App\Models\UserSubscription;
use Auth;

class SubscriptionController extends Controller
{
    public function index(){
        $subscriptions= Subscription::get();
        $page_title = "Subscription";
        return view('admin.subscriptions.index',compact('subscriptions','page_title'));
    }

    public function getSubscription(){
        $page_title = "Subscription";
        $subscriptions= Subscription::get();
        $user_id=Auth::id();
        $subscriptionCheck ='';
        $subscriptionCheck =UserSubscription::where('user_id',Auth::user()->id)->pluck('subscriptions_id')->toArray();
        return view('user.subscriptions.index',compact('subscriptions','page_title','subscriptionCheck'));
    }

    public function insertUserSubscription(Request $request){
        $data = $request->all();
        $subsciption_id = $data['subsciption_id'];
        $user_id=Auth::id();
        $userSubscribe = UserSubscription::create(['user_id' => $user_id,'subscriptions_id' => $subsciption_id]);
        if($userSubscribe && $subsciption_id == 2){
            return response()->json(['success'=>'Subscription is Successfull!','redirect_url'=>route('user.dashboard')]);
        }
        if($userSubscribe && $subsciption_id == 1){
            return response()->json(['success'=>'Subscription is Successfull!','redirect_url'=>route('jobs.list')]);
        }
    }
}
