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
   
    <div class="col-lg-12 col-md-12">
        <div  class="card">
            <div class="card-header">
                <h3 class="card-title">Create a New Technique</h3>
            </div> 
            <div class="card-body">

                <form id="createMember" class="form-horizontal" action="{{route('technique.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf

              
                <div class="row row-sm mb-4">
                    <div class="col-lg">
                        <label class="form-label">Technique Name</label>
                        <input class="form-control" placeholder="Technique Name" name="name" type="text" required>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        
                    </div>

                    <div class="col-lg">
                        <label class="form-label">Category</label>
                        <select class="form-control" name="category" id="" required>
                            <option value="">Select Category</option>
                            @foreach($category as $cat)
                            <option value="{{$cat->id}}"> {{$cat->category_name }}</option>
                            @endforeach
                        </select>
                        @error('category')
                            <span >
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        
                    </div>

                </div>


                <div class="row row-sm mb-4">
                    <div class="col-lg">
                        <label class="form-label">Tags</label>
                        <input class="form-control" placeholder="Tag" name="tag"  id="tag" type="text" required>
                        @error('tag')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-lg">
                        <label class="form-label">Resource</label>
                        <input class="form-control" placeholder="Resource" name="resource"  id="resource" type="text" required>
                        @error('resource')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                   

                </div>

                <div class="row row-sm mb-4">
                    <div class="col-lg">
                        <label class="form-label">Description</label>
                        <textarea class="content" id="description" name="description" required></textarea>

                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                
                <div class="row row-sm mb-4">
                    <div class="col-lg">
                        <label class="form-label">Snippet</label>
                        <textarea class="content2" id="snippet" name="snippet" required></textarea>

                        @error('snippet')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

         
               <div class="row row-sm mb-4">
                    <div class="col-lg">
                      <input type="submit" class="btn btn-primary" value="Submit"/>
                      <a href="{{route('technique.listing')}}" class="btn btn-danger">Cancel</a>
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
    
           

            const validators =  jQuery('#createMember').validate({ // initialize the plugin
                rules: {
                    name:{
                        required:true,
                    },
                    email:{
                        required:true,
                    },
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
                    name : {
                        required: "User Name Required",
                    },
                    email : {
                        required: "Email Required",
                    },
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