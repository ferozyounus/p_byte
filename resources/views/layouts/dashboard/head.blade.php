<!-- Meta data -->
<meta charset="UTF-8">
<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
<meta content="Admin Panel " name="description">
<meta content="Admin Panel " name="author">
<meta name="keywords" content="Admin Panel "/>

<!-- Title -->
<title> @if(Auth::user()->id == 1 ) Admin Panel @else User Panel @endif </title>
<meta name="csrf-token" content="{{ csrf_token() }}" />
<!--Favicon -->
<link rel="icon" href="{{asset('imagess/pibytelogo.png')}}" type="image/png" />

<!--Bootstrap css -->
<link href="{{asset('admin/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

<!-- Style css -->
<link href="{{asset('admin/css/style.css')}}" rel="stylesheet" />
<link href="{{asset('admin/css/dark.css')}}" rel="stylesheet" />
<link href="{{asset('admin/css/skin-modes.css')}}" rel="stylesheet" />

<!-- Animate css -->
<link href="{{asset('admin/css/animated.css')}}" rel="stylesheet" />

<!--Sidemenu css -->
   <link href="{{asset('admin/css/sidemenu.css')}}" rel="stylesheet">

<!-- P-scroll bar css-->
<link href="{{asset('admin/plugins/p-scrollbar/p-scrollbar.css')}}" rel="stylesheet" />

<!---Icons css-->
<link href="{{asset('admin/css/icons.css')}}" rel="stylesheet" />

<!-- Simplebar css -->
<link rel="stylesheet" href="{{asset('admin/plugins/simplebar/css/simplebar.css')}}">


<link href="{{ asset('admin/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
  <link href="{{ asset('admin/plugins/datatable/css/buttons.bootstrap4.min.css')}}"  rel="stylesheet">
  <link href="{{ asset('admin/plugins/datatable/responsive.bootstrap4.min.css')}}" rel="stylesheet" />

  
<!-- INTERNAL Select2 css -->
<link href="{{asset('admin/plugins/select2/select2.min.css')}}" rel="stylesheet" />

<!-- INTERNAl Quill css -->
<link href="{{asset('admin/plugins/quill/quill.snow.css')}}" rel="stylesheet">
<link href="{{asset('admin/plugins/quill/quill.bubble.css')}}" rel="stylesheet">

	<!-- INTERNAl WYSIWYG Editor css -->
  <link href="{{asset('admin/plugins/wysiwyag/richtext.css')}}" rel="stylesheet" />

  <!-- Color Skin css -->
<link id="theme" href="{{asset('admin/colors/color1.css')}}" rel="stylesheet" type="text/css"/>

<!-- INTERNAL File Uploads css-->
<link href="{{asset('admin/plugins/fileupload/css/fileupload.css')}}" rel="stylesheet" type="text/css" />


<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
        
<script>
  tinymce.init({
    selector: 'textarea#editor',
  });
</script>

