<header class="header fixed-top navbar-light light-bg">
    <div class="container">
      <div class="row align-items-center desktop-header">
        {{-- <div class="col-5">
          <div class="left-menu">
            <ul>
              <li><a href="{{ route('home') }}"> Home</a></li>
              <li><a href="{{ route('about-us') }}"> About</a></li>
              <li><a href="{{ route('assigments') }}"> Assessments</a></li>
            </ul>
          </div>
        </div> --}}
        <div class="col-2">
          <a href="/"
            ><img src="{{asset('imagess/pibytelogo.png')}}" alt="" class="logo-img"
          /></a>
        </div>
        <div class="col-10">
          <div class="right-menu">
            <ul>
              <li><a href="{{ route('home') }}"> Home</a></li>
              <li><a href="{{ route('about-us') }}"> About</a></li>
              <li><a href="{{ route('careers') }}"> Techniques</a></li>
              {{-- <li><a href="{{ route('services') }}"> Services</a></li> --}}
           {{--  <li><a href="{{ route('blog-and-podcasts') }}"> Blog And Podcasts</a></li> --}} 
              @if(Auth::check() && auth()->user()->role->slug == 'admin' )
                <li><a href="{{ route('admin.dashboard') }}"> Dashboard</a></li>
              @elseif(Auth::check() && auth()->user()->role->slug == 'user')
                <li><a href="{{ route('user.dashboard') }}"> Dashboard</a></li>
              @else
                <li><a href="{{ route('login') }}"> Login</a></li>
              @endif
               {{-- <li><a href="{{ route('contact-us') }}" class="custom-contact-btn">Contact Us</a></li>  --}}
            </ul>
          </div>
        </div>
      </div>
      <div class="row mobile-header">
        <div class="col-md-12">
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"
                ><img
                  src="{{asset('front/images/logo.png')}}"
                  alt=""
                  class="mobile-logo-img"
              /></a>
              <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}"
                      >Home</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('about-us') }}">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('assigments') }}">Assessments</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('careers') }}">Careers</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('services') }}">Services</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('blog-and-podcasts') }}">Blog And Podcasts</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact-us') }}">Contact Us</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>