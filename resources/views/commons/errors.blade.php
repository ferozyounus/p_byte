<script>
        toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-bottom-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "3000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };
</script>

@if(Session::has('message'))
<script>
    var type = "{{ Session::get('alert-type') }}";
    
    switch(type){
        case 'info':
        toastr.info("{{ Session::get('message') }}");
        break;
        
        case 'warning':
        toastr.warning("{{ Session::get('message') }}");
        break;
        
        case 'success':
        toastr.success("{{ Session::get('message') }}");
        // swal.fire("{{ Session::get('message') }}", "You clicked the button!", "success");
        break;
        
        case 'error':
        toastr.error("{{ Session::get('message') }}");
        break;
    }
</script>
@endif

@if ($errors->any())
<script>
    toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-bottom-right",
        "preventDuplicates": true,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "3000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };
    
    @foreach($errors->all() as $error)
    toastr.error("{{ $error }}");
    @endforeach
    
</script>
@endif