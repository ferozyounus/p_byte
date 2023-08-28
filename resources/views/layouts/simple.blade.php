<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>

		<!-- Meta data -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta content="Love Every Monday" name="description">
		<meta content="Love Every Monday" name="author">
		<meta name="keywords" content="Love Every Monday"/>

		<!-- Title -->
		<title>Love Every Monday</title>

		<!--Favicon -->
		<link rel="icon" href="{{asset('front/images/fav-icon.png')}}" type="image/png" />

		<!--Bootstrap css -->
		<link href="{{asset('admin/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

		<!-- Style css -->
		<link href="{{asset('admin/css/style.css')}}" rel="stylesheet" />
		<link href="{{asset('admin/css/dark.css')}}" rel="stylesheet" />
		<link href="{{asset('admin/css/skin-modes.css')}}" rel="stylesheet" />

		<!-- Animate css -->
		<link href="{{asset('admin/css/animated.css')}}" rel="stylesheet" />

		<!---Icons css-->
		<link href="{{asset('admin/css/icons.css')}}" rel="stylesheet" />

	    <!-- Color Skin css -->
		<link id="theme" href="{{asset('admin/colors/color1.css')}}" rel="stylesheet" type="text/css"/>
		<link href="{{ asset('vendor/toastr/css/toastr.min.css') }}" rel="stylesheet" />

		
		<style>
			.error{
				color: rgb(255, 0, 0);
				width: 100%;
			}
		</style>

	</head>

	<body class="h-100vh page-style1">


        @yield('content')

		@include('layouts.dashboard.scripts')

        @yield('scripts')
		

	</body>
</html>
