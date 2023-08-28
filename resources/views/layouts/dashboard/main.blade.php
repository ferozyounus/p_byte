<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
	<head>
	@if(Auth::user()->id == 1 )
        <title>{{$page_title ?? 'Admin Panel'}}</title>
		@else
		<title>{{$page_title ?? 'User Panel'}}</title>
		@endif
        @yield('header')  
@include('layouts.dashboard.head')
@yield('head')
@yield('style');
<style>
	.table th{
		text-transform: capitalize !important;
	}
</style>
		
	</head>

	<body class="app sidebar-mini">

		<!---Global-loader-->
		<div id="global-loader" >
			<img src="{{asset('admin/images/svgs/loader.svg')}}" alt="loader">
		</div>
		<!--- End Global-loader-->

		<!-- Page -->
		<div class="page">
			<div class="page-main">

              
				@if (Auth::user()->role->slug == 'admin')
				
				@include('layouts.dashboard.admin_sidebar')
				@else

				@include('layouts.dashboard.user_sidebar')
				@endif


				<!-- App-Content -->
				<div class="app-content main-content">
					<div class="side-app">

						@include('layouts.dashboard.header')


                        @yield('content')

						

					</div>
				</div>
				<!-- End app-content-->
			</div>


            @include('layouts.dashboard.footer')

		</div>
		<!-- End Page -->

		<!-- Back to top -->
		<a href="#top" id="back-to-top"><i class="fe fe-chevrons-up"></i></a>

                    
            @include('layouts.dashboard.scripts')
            @yield('scripts')
            <script>
                function logout(){
                   $('#logout-form').submit();
                }

			
           

			function isNumberKey(evt)
				   {
					  var charCode = (evt.which) ? evt.which : evt.keyCode;
					  if (charCode != 46 && charCode > 31 
						&& (charCode < 48 || charCode > 57))
						 return false;
			
					  return true;
				   }
			
			  function isNumber(evt) {
			    evt = (evt) ? evt : window.event;
			    var charCode = (evt.which) ? evt.which : evt.keyCode;
			    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
			        return false;
			    }
			    return true;
			}
			
			</script>
            


			<!-- SMALL MODAL -->
		<div class="modal fade" id="modaldemo2">
			<div class="modal-dialog modal-sm" role="document">
				<div class="modal-content">
					{{-- <div class="modal-header">
						<h6 class="modal-title">Notice</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
					</div> --}}
					<div class="modal-body text-center">
						<h6 class="modal-title">Are you sure,</h6>
						<h6 class="modal-title">you want to logout?</h6>

						{{-- <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p> --}}
					</div>
					<div class="modal-footer justify-content-center">
						
						<button class="btn btn-info" data-dismiss="modal" type="button">Cancel</button>
						<a style="cursor: pointer;" onclick="logout()" class="btn btn-primary" type="button">Logout</a>

					</div>
				</div>
			</div>
		</div>


	</body>
</html>