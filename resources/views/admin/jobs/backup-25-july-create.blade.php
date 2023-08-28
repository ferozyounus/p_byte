@extends('layouts.dashboard.main')
@section('head')
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="http://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
    <style>
      .error{
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

                <form class="form-horizontal" action="{{route('jobs.store')}}" method="POST" enctype="multipart/form-data" id="createJob">
                    @csrf
                <div class="row row-sm mb-4">
                    <div class="col-lg-6">
                        <label class="form-label">Image</label>
                        {{-- <input class="" type="file" name="image" required> --}}
                        <input type="file" class="dropify" data-height="180" id="image" name="image" required/>
                    </div>
                </div>

                <div class="row row-sm mb-4">
                    <div class="col-lg">
                        <label class="form-label">Company Name</label>
                        <input class="form-control" placeholder="Company Name" type="text" name="company_name" id="company_name" required>
                    </div>

                    <div class="col-lg">
                        <label class="form-label">Job Title</label>
                        <input class="form-control" placeholder="Job Title" type="text" name="job_title" required>
                    </div>

                </div>


                <div class="row row-sm mb-4">
                    <div class="col-lg">
                        <label class="form-label">Location</label>
                        {{-- <input class="form-control" placeholder="Location" type="text" name="location" required> --}}
                        <input class="form-control" value="" required id="location" name="location" placeholder="Location" type="text">
                                            
                                               
                        <input type="hidden" name="latitude" id="latitude" class="form-control" />
                        <input type="hidden" name="longitude" id="longitude" class="form-control" />

                        <div id="map"></div>
                    </div>

                    <div class="col-lg">
                        <label class="form-label">Job Type</label>
                        <select  id="select-countries" class="form-control custom-select select2" name="job_type" required>
                            <option value="1" data-data='{"image": "./../../assets/images/flags/br.svg"}'>Full Time</option>
                            <option value="2" data-data='{"image": "./../../assets/images/flags/cz.svg"}'>Part Time</option>
                            <option value="3" data-data='{"image": "./../../assets/images/flags/cz.svg"}'>Temporary</option>
                            <option value="4" data-data='{"image": "./../../assets/images/flags/cz.svg"}'>Contract</option>
                            <option value="5" data-data='{"image": "./../../assets/images/flags/cz.svg"}'>Internship</option>
                            
                        </select>
                    </div>

                    <div class="col-lg">
                        <label class="form-label">Job Category</label>
                        <select  id="select-countries" class="form-control custom-select select2" name="job_category" required>
                            <option value="1" data-data='{"image": "./../../assets/images/flags/br.svg"}'>Category 1</option>
                        </select>
                    </div>

                

                </div>


                <div class="row row-sm mb-4">
                    

                    <div class="col-lg">
                        <label class="form-label">Rate</label>
                        <select  id="select-countries" class="form-control custom-select select2" name="job_rate" required>
                            <option value="1" data-data='{"image": "./../../assets/images/flags/br.svg"}'>Per Hour</option>
                        </select>
                    </div>
                    <div class="col-lg">
                        <label class="form-label">Minimum Rate</label>
                        <input class="form-control" placeholder="Minimum Rate" value="0" type="text" name="minimum_rate" required onkeypress="return isNumber(event)">
                    </div>
                    <div class="col-lg">
                        <label class="form-label">Maximum Rate</label>
                        <input class="form-control" placeholder="Maximum Rate" value="0" type="text" name="maximum_rate" required onkeypress="return isNumber(event)">
                    </div>
                    <div class="col-lg">
                        <label class="form-label">Commission/Bonus</label>
                        <input class="form-control" placeholder="Commission/Bonus" value="0" type="text" name="commission_bonus" required onkeypress="return isNumber(event)">
                    </div>

                </div>

                <div class="row row-sm mb-4">
                    <div class="col-lg">
                        <label class="form-label">Job Description</label>
                        <textarea class="content" id="job_description" name="job_description"></textarea>
                    </div>

                </div>
               

                <div class="row row-sm mb-4">
                    <div class="col-lg">
                        <label class="form-label">Job Responsibility</label>
                        <textarea class="content2"  id="job_responsibility" name="job_responsibility"></textarea>
                    </div>
                </div>



                <div class="row row-sm mb-4">
                    <div class="col-lg">
                        <label class="form-label">Benifits</label>
                        <textarea class="content3" name="job_benifits"></textarea>
                    </div>
                </div>


                <div class="row row-sm mb-4">
                    <div class="col-lg">
                        <label class="form-label">Will you supply references for an applicant to contact to learn more about your company culture?</label>
                        <input type="checkbox" name="job_references" value="1">
                    </div>
                </div>


                {{-- <div class="row row-sm mb-4">
                    <div class="col-lg">
                        <label class="form-label">Requirements</label>
                       
                        <select class="form-control select2" data-placeholder="Choose Requirements" multiple required id="working_skills" name="working_skills[]">
                            <option value="Firefox" >
                                Firefox
                            </option>
                            <option value="Chrome" >
                                Chrome
                            </option>
                            <option value="Safari" >
                                Safari
                            </option>
                            <option value="Opera" >
                                Opera
                            </option>
                            <option value="Internet Explorer" >
                                Internet Explorer
                            </option>
                            <option value="Frontend Developer" >
                                Frontend Developer
                            </option>
                            <option value="Backend Developer" >
                                Backend Developer
                            </option>
                            <option value="Visual Studio" >
                                Visual Studio
                            </option>
                            <option value="Sublime" >
                                Sublime
                            </option>
                            <option value="Atom" >
                                Atom
                            </option>
                        </select>

                    </div>
                </div> --}}
                <div class="row row-sm mb-4">
                    <div class="col-lg">
                        <input type="text" value="" name="working_skills" placeholder="Enter Skills" data-role="tagsinput">
                    </div>
                </div>
                <div class="row row-sm mb-4">
                    <div class="col-lg">
                      <input type="submit" class="btn btn-primary" value="Create Now"/>
                      <a href="{{route('jobs.listing')}}" class="btn btn-danger">Cancel</a>
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
    async
></script>
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
                    location:{
                        required:true,
                    },
                    job_type:{
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
                    location : {
                        required: "Location Required",
                    },
                    job_type : {
                        required: "Job Type Required",
                    }
                },
            });
    });

    </script>
@endsection
