<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	
	<meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>PBYTE</title>
    <link rel="icon" href="{{asset('imagess/pibytelogo.png')}}" type="image/png" />
   



	
	@include('layouts.website.head')
</head>


<!DOCTYPE html>






<body class="@yield('bodyclass')">


	<div data-elementor-type="wp-page" data-elementor-id="40" class="elementor elementor-40" data-elementor-settings="[]">

        @include('layouts.website.header')
		@yield('content')
	
	</div>

	@include('layouts.website.footer')
	@include('layouts.website.scripts')

	@yield('script')
	<script>
		// function logout(){
		//   $('#logout-form').submit();
		// }
	  </script>


</body>

</html>
