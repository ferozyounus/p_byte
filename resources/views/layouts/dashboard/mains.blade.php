<!doctype html>
<html lang="{{ config('app.locale') }}">

<head>
  <title>{{$page_title ?? 'Admin Panel'}}</title>
@yield('header')  
@include('layouts.dashboard.head')
@yield('head')
@yield('style');
</head>

<body>
 
  <div id="page-container" class=" page-header-dark sidebar-o enable-page-overlay sidebar-dark side-scroll page-header-fixed">
    @if(auth()->user()->role->slug == 'admin')
      
      @include('layouts.dashboard.admin_sidebar')
    
      @else
      
      @include('layouts.dashboard.user_sidebar')
    
    @endif
<!-- Header -->
@include('layouts.dashboard.header')
  <!-- END Header -->

    <!-- Main Container -->
    <main id="main-container">
      @yield('content')
    </main>
    <!-- END Main Container -->

@include('layouts.dashboard.footer')
</div>
<!-- END Page Container -->

@include('layouts.dashboard.scripts')
@yield('scripts')
  <script>
    function logout(){
      $('#logout-form').submit();
    }
  </script>
  

  @yield('script')
  <script>
    // Init full DataTable
    jQuery('.customeDataTable').DataTable({
       pageLength: 20,
       lengthMenu: [[5, 10, 20], [5, 10, 20]],
       autoWidth: false
     });
 </script>
</body>

</html>
