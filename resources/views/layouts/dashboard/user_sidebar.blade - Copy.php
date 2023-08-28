@php
use App\Models\UserSubscription;
$subscriptionCheckStandard =UserSubscription::where('user_id',Auth::user()->id)->where('subscriptions_id','2')->get();
$subscriptionCheckPremium =UserSubscription::where('user_id',Auth::user()->id)->where('subscriptions_id','1')->get();
@endphp

<!--aside open-->
<aside class="app-sidebar" >
    <div class="app-sidebar__logo" >
      <a class="header-brand" href="{{ route('home') }}">
        <img src="{{asset('admin/images/new-log.png')}}" class="header-brand-img" alt="logo">
        {{-- <h2 >Member Panel</h2>
        <img src="{{asset('admin/images/brand/favicon.png')}}" class="header-brand-img mobile-logo" alt="logo">
        <img src="{{asset('admin/images/brand/favicon1.png')}}" class="header-brand-img darkmobile-logo" alt="logo"> --}}
      </a>
    </div>
    <div class="app-sidebar__user" style="border-bottom:0px !important;">
      <div class="dropdown user-pro-body text-center" style="display:none;">
        <div class="user-pic">
          @if (Auth::user()->image != Null)

          <img src="{{ asset('storage/'.Auth::user()->image) }}" alt="user-img" class="avatar-xl rounded-circle mb-1">

          @else
          
          <img src="{{asset('admin/images/users/2.jpg')}}" alt="user-img" class="avatar-xl rounded-circle mb-1">
          @endif

        </div>
        <div class="user-info">
          <h5 class=" mb-1"> {{Auth::user()->name}} <i class="ion-checkmark-circled  text-success fs-12"></i></h5>
          <span class="text-muted app-sidebar__user-name text-sm"> {{Auth::user()->email}}</span>
        </div>
      </div>
      <div class="sidebar-navs">
        
      </div>
    </div>
  
      
    <ul class="side-menu app-sidebar3">
      @if($subscriptionCheckStandard->count() >=1)
      <li class="slide">
        <a class="side-menu__item"  href="{{ route('user.dashboard') }}">
        <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z"/></svg>
        <span class="side-menu__label">Dashboard</span></a>
      </li>
      @endif
  
      @if($subscriptionCheckPremium->count() >=1)
      <li class="slide">
        <a class="side-menu__item"  href="{{ route('jobs.list') }}">
       
          <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
            <path xmlns="http://www.w3.org/2000/svg" d="M14 6V4h-4v2h4zM4 8v11h16V8H4zm16-2c1.11 0 2 .89 2 2v11c0 1.11-.89 2-2 2H4c-1.11 0-2-.89-2-2l.01-11c0-1.11.88-2 1.99-2h4V4c0-1.11.89-2 2-2h4c1.11 0 2 .89 2 2v2h4z" fill-rule="evenodd"/>
          </svg>
        <span class="side-menu__label">Jobs</span><i class="angle fa fa-angle-right"></i></a>
      </li>
      @endif

      @if($subscriptionCheckPremium->count() >=1)
      <li class="slide">
        <a class="side-menu__item"  href="{{ route('jobs.recommend') }}">
       
          <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
            <path xmlns="http://www.w3.org/2000/svg" d="M14 6V4h-4v2h4zM4 8v11h16V8H4zm16-2c1.11 0 2 .89 2 2v11c0 1.11-.89 2-2 2H4c-1.11 0-2-.89-2-2l.01-11c0-1.11.88-2 1.99-2h4V4c0-1.11.89-2 2-2h4c1.11 0 2 .89 2 2v2h4z" fill-rule="evenodd"/>
          </svg>
        <span class="side-menu__label">Recommended Jobs</span><i class="angle fa fa-angle-right"></i></a>
      </li>

      <li class="slide">
        <a class="side-menu__item"  href="{{ route('occupation.recommend') }}">
       
          <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
            <path xmlns="http://www.w3.org/2000/svg" d="M14 6V4h-4v2h4zM4 8v11h16V8H4zm16-2c1.11 0 2 .89 2 2v11c0 1.11-.89 2-2 2H4c-1.11 0-2-.89-2-2l.01-11c0-1.11.88-2 1.99-2h4V4c0-1.11.89-2 2-2h4c1.11 0 2 .89 2 2v2h4z" fill-rule="evenodd"/>
          </svg>
        <span class="side-menu__label">Occupations</span><i class="angle fa fa-angle-right"></i></a>
      </li>
      @endif

      <li class="slide">
        <a class="side-menu__item"  href="{{ route('profiles.listing') }}">
        <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
          
         <path d="M0 0h24v24H0z" fill="none"/>
         <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
          
        </svg>
        <span class="side-menu__label">Profile</span><i class="angle fa fa-angle-right"></i></a>
      </li>
      @if(Auth::user()->personal_detail_check == 1 && Auth::user()->about_me_check == 1 && Auth::user()->education_check == 1 && Auth::user()->work_experience_check == 1 && isset(Auth::user()->skills))
      <li class="slide">
        <a class="side-menu__item"  href="{{ route('subscription.listing') }}">
        <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
          
         <path d="M0 0h24v24H0z" fill="none"/>
         <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
          
        </svg>
        <span class="side-menu__label">Subscription</span><i class="angle fa fa-angle-right"></i></a>
      </li>
      @endif
      <li class="slide">
        <a class="side-menu__item" style="cursor: pointer;" data-target="#modaldemo2" data-toggle="modal" >
          <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
            <path xmlns="http://www.w3.org/2000/svg" d="M10.09 15.59L11.5 17l5-5-5-5-1.41 1.41L12.67 11H3v2h9.67l-2.58 2.59zM19 3H5c-1.11 0-2 .9-2 2v4h2V5h14v14H5v-4H3v4c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z"/>
          </svg>
        <span class="side-menu__label">Logout</span><i class="angle fa fa-angle-right"></i></a>
      </li>
  
  
  
  
    </ul>
    
  </aside>
  <!--aside closed-->