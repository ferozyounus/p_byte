<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use App\Models\Subscription;
use App\Models\User;
use App\Models\UserSubscription;
use Auth;
use Illuminate\Http\Request;
use Session;
use Stripe;

class SubscriptionController extends Controller
{
    public function index()
    {
        // $subscriptions= Subscription::get();
        $page_title = "Subscription";
        return view('admin.subscriptions.index', compact('subscriptions', 'page_title'));
    }

    public function getSubscription()
    {
        $intent = auth()->user()->createSetupIntent();
        $page_title = "Subscription";
        //   $subscriptions= Subscription::get();
        $user_id = Auth::id();
        $subscriptionCheck = '';
        $plan = Plan::find(1);
        // $subscriptionCheck =UserSubscription::where('user_id',Auth::user()->id)->pluck('subscriptions_id')->toArray();
        return view('user.subscriptions.index', ['page_title' => $page_title, 'subscriptionCheck' => $subscriptionCheck, 'plan' => $plan, 'intent' => $intent]);
    }

    public function subscription(Request $request)
    {
    //     Session::forget('unsubcription');
    //     Session::forget('success');
       UserSubscription::create([
            'user_id' => Auth::id(),
            'subscriptions_id' => 1
            ]);
        $plan = Plan::find(1);
        $subscription = $request->user()->newSubscription($request->plan, $plan->stripe_plan)
            ->create($request->token);
        return redirect()->back()->with('success', $subscription->stripe_id);

    }

    public function UnSubcription($id)
    {
    //     Session::forget('success');
    //     Session::forget('unsubcription');
        $stripe = new \Stripe\StripeClient('sk_test_51JO2MjCztsJ6v3X9NCV3ZoKhdgelPUAuFcujWbNMLjOxTETuqz0DRHlDyYkfOKsQAOCsbIIjR1hoWExBFeuOhxtr00S1YM2Zxs');
        $response = $stripe->subscriptions->cancel(
            '' . $id . '',
            ['prorate' => 'true']
        );
        if ($response) {
            Subscription::where('stripe_id', $id)->update(['stripe_status' => 'inactive']);
            return redirect()->back()->with('unsubcription', 'UnSubcription Sucessfully');

        } else {
            'Not Cancelled';
        }
    }

    public function planlist()
    {
        $plan = Plan::all();

        return view('admin.plan_list', ['plan' => $plan]);
    }

    public function planupdate(Request $req)
    {

        $req->all();
        $plan = Plan::find($req->id);
        $plan->name = $req->name;
        $plan->save();

        return redirect('/plan/list');
        // return redirect()->back()->with('planupdate','Sucessfully Edit Save');
    }

    public function pew_product()
    {
        // return 'dcd';

        return view('admin.create_product');
    }
    public function create_product(Request $request)
    {
        try {
            // connect with stripe account.
            // $stripe = new \Stripe\StripeClient(
            //     Config('constants.stripe_keys.secret_key')
            //   );

            $stripe = new \Stripe\StripeClient('sk_test_51JO2MjCztsJ6v3X9NCV3ZoKhdgelPUAuFcujWbNMLjOxTETuqz0DRHlDyYkfOKsQAOCsbIIjR1hoWExBFeuOhxtr00S1YM2Zxs');

            // Create a product over stripe
            $product_detail = $stripe->products->create([
                'name' => $request->product_name,
            ]);

            // create prices for the product
            $product_id = $product_detail->id;
            $monthly_price = $stripe->prices->create([
                'unit_amount' => $request->monthly_price * 100,
                'currency' => 'inr',
                'recurring' => ['interval' => 'month'], // it defines the recurring interval
                'product' => $product_id,
            ]);

            // $yearly_price = $stripe->prices->create([
            //     'unit_amount' => $request->yearly_price*100,
            //     'currency' => 'inr',
            //     'recurring' => ['interval' => 'year'],
            //     'product' => $product_id,
            // ]);
            return [$product_detail, $monthly_price];
        } catch (\Exception $e) {
            return false;
        }
    }

    public function insertUserSubscription(Request $request)
    {
        // $data = $request->all();
        // $subsciption_id = $data['subsciption_id'];
        // $user_id=Auth::id();
        // //$userSubscribe = UserSubscription::create(['user_id' => $user_id,'subscriptions_id' => $subsciption_id]);
        // if($userSubscribe && $subsciption_id == 2){
        //     return response()->json(['success'=>'Subscription is Successfull!','redirect_url'=>route('user.dashboard')]);
        // }
        // if($userSubscribe && $subsciption_id == 1){
        //     return response()->json(['success'=>'Subscription is Successfull!','redirect_url'=>route('jobs.list')]);
        // }
    }
}
