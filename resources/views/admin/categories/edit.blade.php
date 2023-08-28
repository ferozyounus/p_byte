@extends('layouts.dashboard.main')
@section('head')

<style>
  .error{
    color: rgb(255, 0, 0);
  }
</style>

@endsection
@section('content')


{{-- file:///C:/Users/Muhammad%20Ahmed/Downloads/Admitro%201.0.0/Main_File/Html/HTML-LTR/Vertical-IconSidebar-Light/blog-styles.html
file:///C:/Users/Muhammad%20Ahmed/Downloads/Admitro%201.0.0/Main_File/Html/HTML-LTR/Vertical-IconSidebar-Light/datatable.html
file:///C:/Users/Muhammad%20Ahmed/Downloads/Admitro%201.0.0/Main_File/Html/HTML-LTR/Vertical-IconSidebar-Light/profile-1.html
file:///C:/Users/Muhammad%20Ahmed/Downloads/Admitro%201.0.0/Main_File/Html/HTML-LTR/Vertical-IconSidebar-Light/tabs.html
file:///C:/Users/Muhammad%20Ahmed/Downloads/Admitro%201.0.0/Main_File/Html/HTML-LTR/Vertical-IconSidebar-Light/modal.html
file:///C:/Users/Muhammad%20Ahmed/Downloads/Admitro%201.0.0/Main_File/Html/HTML-LTR/Vertical-IconSidebar-Light/form-elements.html --}}


<!-- Row -->
<div class="row">
   
    <div class="col-lg-12 col-md-12">
        <div  class="card">
            <div class="card-header">
                <h3 class="card-title">Edit Member</h3>
            </div> 
            <div class="card-body">

                <form id="updateMember" action="{{route('category.update', $category->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf

               
                <div class="row row-sm mb-4">
                    <div class="col-lg">
                        <label class="form-label">Name</label>
                        <input class="form-control" placeholder="Category Name" name="category" value="{{ $category->category_name}}" type="text" required>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>



               <div class="row row-sm mb-4">
                    <div class="col-lg">
                      <input type="submit" class="btn btn-primary" value="Submit"/>
                      <a href="{{route('category.listing')}}" class="btn btn-danger">Cancel</a>
                    </div>
                </div>

                
                </form>
                
                

            </div>
        </div>
    </div>
</div>
<!-- End Row -->


@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/additional-methods.min.js"></script>


<script>

    jQuery(document).ready(function () {
    
           

            const validators =  jQuery('#updateMember').validate({ // initialize the plugin
                rules: {
                    name:{
                        required:true,
                    },
                    email:{
                        required:true,
                    },
                    password : {
                        // required: true,
                        minlength : 8
                    },
                    confirm_password : {
                        // required: true,
                        minlength : 8,
                        equalTo : "#password"
                    }
                },
                messages: {
                    name : {
                        required: "User Name Required",
                    },
                    email : {
                        required: "Email Required",
                    },
                    password : {
                        // required: "Password Required",
                        minlength : "Password Should Be Min 8 Digit",
                    },
                    confirm_password : {
                        // required: "Confirm Password Required",
                        minlength : "Password Should Be Min 8 Digit",
                        equalTo : "Confirm Password Does't Match With Password"
                    }
                },
            });
    });

    </script>
@endsection