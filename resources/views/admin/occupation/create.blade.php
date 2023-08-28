@extends('layouts.dashboard.main')
@section('head')
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="http://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
    <style>
        .error {
            color: rgb(255, 0, 0);
        }
    </style>
@endsection
<link rel="stylesheet" type="text/css" href="">
@section('content')
    <!-- Row -->
    <div class="row">

        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Create a New Occupation</h3>
                </div>
                <div class="card-body">
                    
                    <form class="form-horizontal"
                        action="{{ isset($occupations->onetsoc_code) ? route('occupations.update') : route('occupations.store') }}" method="POST"
                        enctype="multipart/form-data" id="createJob">
                        @csrf
                        <div class="row row-sm mb-4">
                            <div class="col-lg">
                                <label class="form-label">Occupation Title</label>
                                <input class="form-control" placeholder="Occupation Name" type="hidden"
                                    value="{{ isset($occupations->onetsoc_code) ? $occupations->onetsoc_code : '' }}" name="id" id="id">
                                <input class="form-control" placeholder="Occupation Name" type="text"
                                    value="{{ isset($occupations->title) ? $occupations->title : '' }}" name="occupation_title"
                                    id="occupation_title">
                            </div>
                       
                           
                        </div>

                     

                     

                <div class="row row-sm mb-4">
                    <div class="col-lg">
                        <label class="form-label">Occupation Description</label>
                        <textarea class="content" id="occupation_description" name="occupation_description">{{ isset($occupations->description) ? $occupations->description : '' }}</textarea>
                    </div>

                </div>
               


             


                

                        <hr>
                        <div class="row row-sm mb-4">
                            <div class="col-lg">
                                <input type="submit" class="btn btn-primary"
                                    value="{{ isset($occupations->onetsoc_code) ? 'Save Edit' : 'Create Now ' }}" />
                                <a href="{{ route('occupations.listing') }}" class="btn btn-danger">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA6BmocvpwcxPuvHXiN8-2NC_ISxYKeYzc&callback=initAutocomplete&libraries=places&v=weekly"
        async></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

    <script src="http://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>


    @include('admin.includes.google-map')
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/additional-methods.min.js"></script>

    <script>

    jQuery(document).ready(function () {
            const validators =  jQuery('#createJob').validate({ // initialize the plugin
                rules: {
                    company_name:{
                        required:true,
                    },
                    job_title:{
                        required:true,
                    },
                    job_location:{
                        required:true,
                    },
                    linkedin_job_url_cleaned:{
                        required:true,
                    },
                    company_url:{
                        required:true,
                    }
                },
                messages: {
                    company_name : {
                        required: "Company Name Required",
                    },
                    job_title : {
                        required: "Job Title Required",
                    },
                    job_location : {
                        required: "Location Required",
                    },
                    linkedin_job_url_cleaned : {
                        required: "LinkedIn URL Required",
                    },
                    company_url : {
                        required: "Company URL Required",
                    }
                },
            });
    });

    </script>
@endsection
