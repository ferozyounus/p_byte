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
                    <h3 class="card-title">Create a New Job</h3>
                </div>
                <div class="card-body">

                    <form class="form-horizontal"
                        action="{{ isset($data->id) ? route('jobs.update') : route('jobs.store') }}" method="POST"
                        enctype="multipart/form-data" id="createJob">
                        @csrf
                        <div class="row row-sm mb-4">
                            <div class="col-lg">
                                <label class="form-label">Company Name</label>
                                <input class="form-control" placeholder="Company Name" type="hidden"
                                    value="{{ isset($data->id) ? $data->id : '' }}" name="id" id="id">
                                <input class="form-control" placeholder="Company Name" type="text"
                                    value="{{ isset($data->company_name) ? $data->company_name : '' }}" name="company_name"
                                    id="company_name">
                            </div>
                            <div class="col-lg">
                                <label class="form-label">Job Title</label>
                                <input class="form-control" placeholder="Job Title" type="text"
                                    value="{{ isset($data->job_title) ? $data->job_title : '' }}" name="job_title">
                            </div>
                           
                        </div>

                        <div class="row row-sm mb-4">
                        <div class="col-lg">
                                <label class="form-label">Location</label>
                                <input class="form-control"
                                    value="{{ isset($data->job_location) ? $data->job_location : '' }}" id="job_location"
                                    name="job_location" placeholder="Location" type="text">
                            </div>
                            @php
                       
                            if(isset($data)){
                            if($data->job_type == 'Full-Time'){
                                $full_time = 'true';
                            }else if($data->job_type == 'Part-Time'){
                                $part_time = 'true';
                            }else if($data->job_type == 'Shift Work'){
                                $shift = 'true';
                            }else if($data->job_type == 'Intermittent'){
                                $inter = 'true';
                            }else if($data->job_type == 'Job Sharing'){
                                $job = 'true';
                            }else if($data->job_type == 'Multiple Schedules'){
                                $multi = 'true';
                            }else{
                                $full_time = 'false';
                                $part_time = 'false';
                                $shift = 'false';
                                $inter = 'false';
                                $job = 'false';
                                $multi = 'false';
                            }
                        }
                            @endphp
                            <div class="col-lg">
                                <label class="form-label">Job Type</label>
                                <select  id="select-countries" class="form-control custom-select select2" name="job_type" required>
                                    <option value="Full-Time" selected="{{ isset($full_time) ? $full_time : 'false'  }}" data-data='{"image": "./../../assets/images/flags/br.svg"}'>Full Time</option>
                                    <option value="Part-Time" selected="{{ isset($part_time) ? $part_time : 'false'  }}" data-data='{"image": "./../../assets/images/flags/cz.svg"}'>Part Time</option>
                                    <option value="Shift Work" selected="{{ isset($shift) ? $shift : 'false'  }}" data-data='{"image": "./../../assets/images/flags/cz.svg"}'>Shift Work</option>
                                    <option value="Intermittent" selected="{{ isset($inter) ? $inter : 'false'  }}" data-data='{"image": "./../../assets/images/flags/cz.svg"}'>Intermittent</option>
                                    <option value="Job Sharing" selected="{{ isset($job) ? $job : 'false'  }}" data-data='{"image": "./../../assets/images/flags/cz.svg"}'>Job Sharing</option>
                                    <option value="Multiple Schedules" selected="{{ isset($multi) ? $multi : 'false'  }}" data-data='{"image": "./../../assets/images/flags/cz.svg"}'>Multiple Schedules</option>
                                    
                                </select>
                            </div>
                            <div class="col-lg">
                                <label class="form-label">Salary</label>
                                <input class="form-control" placeholder="Job Salary" value="{{ isset($data->job_salary)  ? $data->job_salary : 0 }}" type="text" name="job_salary" required onkeypress="return isNumber(event)">
                            </div>

                        </div>
                        <div class="row row-sm mb-4">
                            <div class="col-lg">
                                <label class="form-label">LinkedIn URL </label>
                                <input class="form-control" placeholder="LinkedIn job url " type="url"
                                    value="{{ isset($data->job_url) ? $data->job_url : '' }}"
                                    name="linkedin_job_url_cleaned" id="linkedin_job_url_cleaned">
                            </div>
                            <div class="col-lg">
                                <label class="form-label">Company URL</label>
                                <input class="form-control" placeholder="Company url" type="url"
                                    value="{{ isset($data->company_url) ? $data->company_url : '' }}" name="company_url"
                                    id="company_url">
                            </div>
                           
                        </div>

                     

                <div class="row row-sm mb-4">
                    <div class="col-lg">
                        <label class="form-label">Job Description</label>
                        <textarea class="content" id="job_description" name="job_description">{{ isset($data->job_summary) ? $data->job_summary : '' }}</textarea>
                    </div>

                </div>
               

                <div class="row row-sm mb-4">
                    <div class="col-lg">
                        <label class="form-label">Job Responsibility</label>
                        <textarea class="content2"  id="job_responsibility" name="job_responsibility">{{ isset($data->major_duties) ? $data->major_duties : '' }}</textarea>
                    </div>
                </div>



                <!-- <div class="row row-sm mb-4">
                    <div class="col-lg">
                        <label class="form-label">Benifits</label>
                        <textarea class="content3" name="job_benifits"></textarea>
                    </div>
                </div> -->


                

                        <hr>
                        <div class="row row-sm mb-4">
                            <div class="col-lg">
                                <input type="submit" class="btn btn-primary"
                                    value="{{ isset($data->id) ? 'Save Edit' : 'Create Now ' }}" />
                                <a href="{{ route('jobs.listing') }}" class="btn btn-danger">Cancel</a>
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
