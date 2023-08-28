@extends('layouts.dashboard.main')
@section('head')

<style>
  .error{
    color: rgb(255, 0, 0);
  }
</style>

@endsection
@section('content')



<!-- Row -->
<div class="row">

   {{--  --}}
    <div class="col-lg-6 col-md-6">
        <div  class="card">
            <div class="card-header">
                <h3 class="card-title">Update Password</h3>
            </div> 



            <div class="card-body">

                <form id="profileUpdatePassword" class="form-horizontal" action="{{route('profile.updatepassword',Auth::user()->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf

                <div class="row row-sm mb-4">
                    <div class="col-lg">
                        <label class="form-label">Password</label>
                        <input class="form-control" placeholder="Password" id="password" name="password" type="password" required>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        
                    </div>
                </div>
                <div class="row row-sm mb-4">
                    <div class="col-lg">
                        <label class="form-label">Confirm Password</label>
                        <input class="form-control" placeholder="Confirm Password" id="confirm_password" name="confirm_password" type="password" required>
                        @error('password')
                            <span >
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

            <div class="row row-sm mb-4">
                    <div class="col-lg">
                    <input type="submit" class="btn btn-primary" value="Submit"/>
                    </div>
                </div>

                
                </form>
            </div>
        </div>
    </div>
    {{--  --}}

</div>
<!-- End Row -->



@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/additional-methods.min.js"></script>


<script>

    jQuery(document).ready(function () {
    
           

            const validators =  jQuery('#profileUpdatePassword').validate({ // initialize the plugin
                rules: {
                    password : {
                        required: true,
                        minlength : 8
                    },
                    confirm_password : {
                        required: true,
                        minlength : 8,
                        equalTo : "#password"
                    }
                },
                messages: {
                    password : {
                        required: "Password Required",
                        minlength : "Password Should Be Min 8 Digit",
                    },
                    confirm_password : {
                        required: "Confirm Password Required",
                        minlength : "Password Should Be Min 8 Digit",
                        equalTo : "Confirm Password Does't Match With Password"
                    }
                },
            });
    });

    </script>
@endsection


