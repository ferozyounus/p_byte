<!--aside open-->
<aside class="app-sidebar" >
  <div class="app-sidebar__logo" >
    <a class="header-brand" href="{{ route('home') }}">
      {{-- <h2 >Admin Panel</h2> --}}
      <img src="{{asset('imagess/pibytelogo.png')}}" class="header-brand-imgs" alt="logo">
      {{-- <img src="{{asset('admin/images/loveeverymondaylogo.jpg')}}" class="header-brand-img darkmobile-logo" alt="logo"> --}}
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
   
    <li class="slide">
      <a class="side-menu__item"  href="{{ route('admin.dashboard') }}">
      <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
        <path d="M0 0h24v24H0V0z" fill="none"/>
        <path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z"/>
      </svg>
       <span class="side-menu__label">Dashboard</span></a>
    </li>

    <li class="slide">
      <a class="side-menu__item"  href="{{ route('members.listing') }}">
     
     <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
        <path d="M0 0h24v24H0V0z" fill="none"/>
        <path xmlns="http://www.w3.org/2000/svg" d="M12,12.75c1.63,0,3.07,0.39,4.24,0.9c1.08,0.48,1.76,1.56,1.76,2.73L18,18H6l0-1.61c0-1.18,0.68-2.26,1.76-2.73 C8.93,13.14,10.37,12.75,12,12.75z M4,13c1.1,0,2-0.9,2-2c0-1.1-0.9-2-2-2s-2,0.9-2,2C2,12.1,2.9,13,4,13z M5.13,14.1 C4.76,14.04,4.39,14,4,14c-0.99,0-1.93,0.21-2.78,0.58C0.48,14.9,0,15.62,0,16.43V18l4.5,0v-1.61C4.5,15.56,4.73,14.78,5.13,14.1z M20,13c1.1,0,2-0.9,2-2c0-1.1-0.9-2-2-2s-2,0.9-2,2C18,12.1,18.9,13,20,13z M24,16.43c0-0.81-0.48-1.53-1.22-1.85 C21.93,14.21,20.99,14,20,14c-0.39,0-0.76,0.04-1.13,0.1c0.4,0.68,0.63,1.46,0.63,2.29V18l4.5,0V16.43z M12,6c1.66,0,3,1.34,3,3 c0,1.66-1.34,3-3,3s-3-1.34-3-3C9,7.34,10.34,6,12,6z"/>
      </svg> 
     
      <span class="side-menu__label">Members</span><i class="angle fa fa-angle-right"></i></a>
    </li>
    <li class="slide">
      <a class="side-menu__item"  href="{{ route('category.listing') }}">
     
     <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
        <path d="M0 0h24v24H0V0z" fill="none"/>
        <path xmlns="http://www.w3.org/2000/svg" d="M12,12.75c1.63,0,3.07,0.39,4.24,0.9c1.08,0.48,1.76,1.56,1.76,2.73L18,18H6l0-1.61c0-1.18,0.68-2.26,1.76-2.73 C8.93,13.14,10.37,12.75,12,12.75z M4,13c1.1,0,2-0.9,2-2c0-1.1-0.9-2-2-2s-2,0.9-2,2C2,12.1,2.9,13,4,13z M5.13,14.1 C4.76,14.04,4.39,14,4,14c-0.99,0-1.93,0.21-2.78,0.58C0.48,14.9,0,15.62,0,16.43V18l4.5,0v-1.61C4.5,15.56,4.73,14.78,5.13,14.1z M20,13c1.1,0,2-0.9,2-2c0-1.1-0.9-2-2-2s-2,0.9-2,2C18,12.1,18.9,13,20,13z M24,16.43c0-0.81-0.48-1.53-1.22-1.85 C21.93,14.21,20.99,14,20,14c-0.39,0-0.76,0.04-1.13,0.1c0.4,0.68,0.63,1.46,0.63,2.29V18l4.5,0V16.43z M12,6c1.66,0,3,1.34,3,3 c0,1.66-1.34,3-3,3s-3-1.34-3-3C9,7.34,10.34,6,12,6z"/>
      </svg> 
     
      <span class="side-menu__label">Categories</span><i class="angle fa fa-angle-right"></i></a>
    </li>
    <li class="slide">
      <a class="side-menu__item"  href="{{ route('technique.listing') }}">
     
     <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
        <path d="M0 0h24v24H0V0z" fill="none"/>
        <path xmlns="http://www.w3.org/2000/svg" d="M12,12.75c1.63,0,3.07,0.39,4.24,0.9c1.08,0.48,1.76,1.56,1.76,2.73L18,18H6l0-1.61c0-1.18,0.68-2.26,1.76-2.73 C8.93,13.14,10.37,12.75,12,12.75z M4,13c1.1,0,2-0.9,2-2c0-1.1-0.9-2-2-2s-2,0.9-2,2C2,12.1,2.9,13,4,13z M5.13,14.1 C4.76,14.04,4.39,14,4,14c-0.99,0-1.93,0.21-2.78,0.58C0.48,14.9,0,15.62,0,16.43V18l4.5,0v-1.61C4.5,15.56,4.73,14.78,5.13,14.1z M20,13c1.1,0,2-0.9,2-2c0-1.1-0.9-2-2-2s-2,0.9-2,2C18,12.1,18.9,13,20,13z M24,16.43c0-0.81-0.48-1.53-1.22-1.85 C21.93,14.21,20.99,14,20,14c-0.39,0-0.76,0.04-1.13,0.1c0.4,0.68,0.63,1.46,0.63,2.29V18l4.5,0V16.43z M12,6c1.66,0,3,1.34,3,3 c0,1.66-1.34,3-3,3s-3-1.34-3-3C9,7.34,10.34,6,12,6z"/>
      </svg> 
     
      <span class="side-menu__label">Techniques</span><i class="angle fa fa-angle-right"></i></a>
    </li>
   {{-- <li class="slide">
      <a class="side-menu__item"  href="{{ route('plan.list') }}">
      <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
        <g xmlns="http://www.w3.org/2000/svg">
          <circle cx="10" cy="8" r="4"/><path d="M10.35,14.01C7.62,13.91,2,15.27,2,18v2h9.54C9.07,17.24,10.31,14.11,10.35,14.01z"/><path d="M19.43,18.02C19.79,17.43,20,16.74,20,16c0-2.21-1.79-4-4-4s-4,1.79-4,4c0,2.21,1.79,4,4,4c0.74,0,1.43-0.22,2.02-0.57 L20.59,22L22,20.59L19.43,18.02z M16,18c-1.1,0-2-0.9-2-2c0-1.1,0.9-2,2-2s2,0.9,2,2C18,17.1,17.1,18,16,18z"/>
        </g> 
      </svg>
      <span class="side-menu__label">Subscription</span><i class="angle fa fa-angle-right"></i></a>
    </li> --}}

    

  {{--  <li class="slide">
      <a class="side-menu__item {{Route::currentRouteName() == 'jobs.create' ? ' active' : '' }}"  href="{{ route('jobs.listing') }}">
      <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
        <path xmlns="http://www.w3.org/2000/svg" d="M14 6V4h-4v2h4zM4 8v11h16V8H4zm16-2c1.11 0 2 .89 2 2v11c0 1.11-.89 2-2 2H4c-1.11 0-2-.89-2-2l.01-11c0-1.11.88-2 1.99-2h4V4c0-1.11.89-2 2-2h4c1.11 0 2 .89 2 2v2h4z" fill-rule="evenodd"/>
      </svg>
      <span class="side-menu__label">Jobs</span><i class="angle fa fa-angle-right"></i></a>
    </li> --}}

  {{--  <li class="slide">
      <a class="side-menu__item"  href="{{ route('occupations.listing') }}">
      <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
         <g xmlns="http://www.w3.org/2000/svg"> 
          <circle cx="10" cy="8" r="4"/><path d="M10.35,14.01C7.62,13.91,2,15.27,2,18v2h9.54C9.07,17.24,10.31,14.11,10.35,14.01z"/><path d="M19.43,18.02C19.79,17.43,20,16.74,20,16c0-2.21-1.79-4-4-4s-4,1.79-4,4c0,2.21,1.79,4,4,4c0.74,0,1.43-0.22,2.02-0.57 L20.59,22L22,20.59L19.43,18.02z M16,18c-1.1,0-2-0.9-2-2c0-1.1,0.9-2,2-2s2,0.9,2,2C18,17.1,17.1,18,16,18z"/>
       </g> 
      </svg>
      <span class="side-menu__label">Occupation</span><i class="angle fa fa-angle-right"></i></a>
    </li> --}}

  
    

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