@extends('layouts.dashboard.main')

@section('head')

<style>
  .error{
    color: rgb(255, 0, 0);
  }
  .custom-disabled {
    pointer-events:none; //This makes it not clickable
    opacity:0.6;         //This grays it out to look disabled
}
.custom-right{
    float: right;
    background-color: #2F8D46;
}
</style>
    <link rel="stylesheet" href="http://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
<link rel="stylesheet" type="text/css" href="{{ asset('css/stepForm.css' )}}">
@endsection

@section('content')



@php
    $check_months = array( 
        'January' => '01',
        'February' => '02', 
        'March' => '03', 
        'April' => '04', 
        'May' => '05', 
        'June' => '06', 
        'July' => '07', 
        'August' => '08', 
        'September' => '09', 
        'October'=> '10', 
        'November' => '11', 
        'December' => '12'
    );


@endphp

<!-- Row -->
<div class="row">
    <div class="col-md-12">
       
        <!-- div -->
        <div class="card" id="tabs-style4"> 
            <div class="card-body">
                <div class="">
                    <form id="custom-step-form" class="form-horizontal"  method="POST" enctype="multipart/form-data">
                        <ul id="progressbar">
                            <li class="active" id="step1">
                                <strong>Personal Details</strong>
                            </li>
                            <li id="step2"  class="@if (Auth::user()->about_me_check == 0) custom-disabled @endif"><strong>About Me</strong></li>
                            <li id="step3"  class="@if (Auth::user()->education_check == 0) custom-disabled @endif"><strong>Education</strong></li>
                            <li id="step4"  class="@if (Auth::user()->work_experience_check == 0) custom-disabled @endif"><strong>Work Experience</strong></li>
                            <li id="step5"  class="@if (!isset(Auth::user()->skills)) custom-disabled @endif"><strong>Skills</strong></li>
                        </ul>
                        <div class="progress">
                            <div class="progress-bar"></div>
                        </div> <br>
                        <fieldset class="step-one custom-steps">
                            <div class="row">
                                            
                                            <div class="col-lg-12 col-md-12 mb-5">
                                                <div class="col-lg-6">
                                                    <label class="form-label">Profile Image</label>
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <input type="file" class="dropify" data-height="150" id="image" name="image"/>
                                                    
                                                    <input type="hidden" name="formType" value="personalDetail" class="form-control" />
                                                </div>
                                            </div>

                                            <div class="col-lg-12 col-md-12 mb-5">
                                                <div class="col-lg">
                                                    <label class="form-label">First Name</label>
                                                    <input class="form-control" required value="{{ Auth::user()->name }}" id="name" name="name" placeholder="First Name" type="text">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 mb-5">
                                                <div class="col-lg">
                                                    <label class="form-label">Last Name</label>
                                                    <input class="form-control" required value="{{ Auth::user()->last_name === null ? old('last_name') : Auth::user()->last_name }}" id="last_name" name="last_name" placeholder="Last Name" type="text">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 mb-5">
                                                <div class="col-lg">
                                                    <label class="form-label">Location</label>
                                                    <input class="form-control" value="{{ Auth::user()->location === null ? old('location') : Auth::user()->location }}" required id="location" name="location" placeholder="Location" type="text">
                                                
                                                   
                                                    <input type="hidden" value="{{ Auth::user()->latitude === null ? old('latitude') : Auth::user()->latitude }}" name="latitude" id="latitude" class="form-control" />
                                                    <input type="hidden" value="{{ Auth::user()->longitude === null ? old('longitude') : Auth::user()->longitude }}" name="longitude" id="longitude" class="form-control" />
                                                    {{-- <input id="search" class="form-control" type="text" placeholder="Search Location" style="width:300px;"/> --}}
                                                   
                                                    <div id="map"></div>

                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-12 col-md-12 mb-5">
                                                <div class="col-lg">
                                                    <label class="form-label">Languages</label>
                                                   <div class="row row-sm mb-4">
                                                        <div class="col-lg">
                                                            <input type="text" value="{{ Auth::user()->language }}" id="language" name="language" placeholder="Add Languages" required data-role="tagsinput">
                                                        </div>
                                                    </div>
                                                   {{--  @php
                                                   
                                                        if(Auth::user()->language !== null){
                                                            $languages = explode(',' ,Auth::user()->language);
                                                        }
                                                       
                                                    @endphp
                                                    
                                                     <select class="form-control select2" data-placeholder="Choose Language" multiple required id="language" name="language[]">
                                                        <option value="English" {{((Auth::user()->language !== null) && (in_array("English", $languages))) ? 'selected':''}}>
                                                            English
                                                        </option>
                                                        <option value="Spanish" {{((Auth::user()->language !== null) && (in_array("Spanish", $languages))) ? 'selected':''}}>
                                                            Spanish
                                                        </option>
                                                        <option value="German" {{((Auth::user()->language !== null) && (in_array("German", $languages))) ? 'selected':''}}>
                                                            German
                                                        </option>
                                                    </select> --}}

                                                </div>
                                            </div>

                                            <div class="col-lg-12 col-md-12 mb-5">
                                                <div class="col-lg">
                                                    <label class="form-label">Email</label>
                                                    <input class="form-control" readonly value="{{ Auth::user()->email }}" placeholder="Email" type="text">
                                                </div>
                                            </div>

                                            <div class="col-lg-12 col-md-12 mb-5">
                                                <div class="col-lg">
                                                    <label class="form-label">Phone</label>
                                                    <input class="form-control" value="{{ Auth::user()->phone === null ? old('phone') : Auth::user()->phone }}" required id="phone" name="phone" placeholder="Phone" type="text">
                                                </div>
                                            </div>
                                    </div>
                     {{--        <input type="button" name="next-step"
                                class="next-step @if (Auth::user()->personal_detail_check == 0) d-none @endif" value="Next Step" /> --}}
                                    <a href="javascript:void(0)" class="btn btn-primary first-step custom-right">Submit</a>
                        </fieldset>
                        <fieldset class="step-two custom-steps">
                            <div class="row">
                                        <div class="col-lg-12 col-md-12 mb-5">
                                            <label class="form-label">Biography</label>
                                            <input type="hidden" name="formType2" value="biography" class="form-control" />
                                         </div>

                                        <div class="col-lg-12 col-md-12 mb-5">
                                            <label class="form-label">Job Description</label>
                                            <textarea class="content" id="job_description" name="job_description">{{ Auth::user()->job_description === null ? old('job_description') : Auth::user()->job_description }}</textarea>
                                        </div>


                    
                                    </div>
                                    
                            {{-- <input type="button" name="next-step"
                                class="next-step @if (Auth::user()->about_me_check == 0) d-none @endif" value="Next Step" />
                            <input type="button" name="previous-step"
                                class="previous-step"
                                value="Previous Step" /> --}}
                                    <a href="javascript:void(0)" class="btn btn-primary second-step custom-right">Submit</a>

                        </fieldset>
                        <fieldset class="step-three custom-steps">
                            <div class="row">
                                        <div class="col-lg-12 col-md-12 mb-5">
                                            <label class="form-label">Education</label>
                                         </div>

                                        
                                        <div class="col-lg-12 col-md-12 mb-5" id="educationList">
                                            
                                            @include('admin.profiles.education_card')

                                        </div>

                                        <div class="col-lg-12 col-md-12 mb-5">
                                        
                                            <a data-target="#educationModal" data-toggle="modal"  class="btn btn-primary">
                                                <i class="fe fe-plus fs-16 text-icon" style="color:white !important;"></i>
                                                Add Education Experience </a>

                                        </div>


                    
                                    </div>
                           {{--  <input type="button" name="next-step"
                                class="next-step @if (Auth::user()->education_check == 0) d-none @endif"  value="Next Step" />
                            <input type="button" name="previous-step"
                                class="previous-step"
                                value="Previous Step" /> --}}
                        </fieldset>
                        <fieldset class="step-four custom-steps">
                            <div class="row">
                                        <div class="col-lg-12 col-md-12 mb-5">
                                            <label class="form-label">Working Experience</label>
                                         </div>

                                        
                                        <div class="col-lg-12 col-md-12 mb-5" id="workList">
                                          
                                            @include('admin.profiles.work_card')
                                           
                                        </div>

                                        <div class="col-lg-12 col-md-12 mb-5">
                                        
                                            <a data-target="#experienceModal" data-toggle="modal"  class="btn btn-primary">
                                                <i class="fe fe-plus fs-16 text-icon" style="color:white !important;"></i>
                                                Add Work Experience </a>
                                        </div>


                    
                                    </div>
                            {{-- <input type="button" name="next-step"
                                class="next-step @if (Auth::user()->work_experience_check == 0) d-none @endif" value="Next Step" />
                            <input type="button" name="previous-step"
                                class="previous-step"
                                value="Previous Step" /> --}}
                        </fieldset>
                        <fieldset class="step-five custom-steps">
                                <h2 class="text text-center">
                                </h2>
                                 <div class="row">
                                        <div class="col-lg-12 col-md-12 mb-5">
                                            <label class="form-label">Skills</label>
                                            
                                         </div>

                                         <div class="col-lg-12 col-md-12 mb-5">
                                            <label class="form-label">Type Skills</label>
                                           
                                            {{-- @php
                                                if(Auth::user()->skills !== null){
                                                    $skills = explode(',' ,Auth::user()->skills);
                                                }
                                            @endphp --}}
                                            <div class="row row-sm mb-4">
                                                <div class="col-lg">
                                                    <input type="text" value="{{ Auth::user()->skills }}" name="skills" id="skills" placeholder="Type Skills" data-role="tagsinput">
                                                </div>
                                            </div>
                                            <input type="hidden" name="formType" value="personalDetail" class="form-control" />
                                           

                    
                                    </div>
                            </div>
                            <input type="button" name="final_finish" id="final-finish" value="Submit" class="final-finish" />
                            {{-- <input type="button" name="previous-step" class="previous-step" value="Previous Step" /> --}}
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        <!-- /div -->

        
    </div>
</div>
<!-- End Row -->





<!-- Education Modal -->
<div id="educationModal" class="modal fade">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content ">
           
            <form id="educationModalForm" class="form-horizontal" method="POST" enctype="multipart/form-data">
                @csrf  

            <div class="modal-body">
                
                <div class="row row-sm mb-4">
                    <div class="col-lg">
                        <label class="form-label">Education Experience</label>
                    </div>

                </div>

                <div class="row row-sm mb-4">
                    <div class="col-lg">
                        <label class="form-label">School Or University</label>
                        <input class="form-control" placeholder="School Or University" reuired id="education_title" name="education_title" type="text">
                    </div>
                </div>

                <div class="row row-sm mb-4">
                    <div class="col-lg">
                        <label class="form-label">Start Date</label>
                        <input class="form-control" type="month" reuired id="education_start_month" name="education_start_month">
                    </div>

                    <div class="col-lg">
                        <label class="form-label">End Date</label>
                        <input class="form-control" type="month" reuired id="education_end_month" name="education_end_month">
                    </div>
                </div>

                <div class="row row-sm mb-4">
                    <div class="col-lg">
                        <label class="form-label">Description</label>
                        <textarea class="form-control mb-4"  id="education_description" name="education_description" placeholder="Description" required="" rows="3">Description</textarea>
                      
                    </div>
                </div>

            </div>
            
            <div class="modal-footer">
                <input type="submit" class="btn btn-primary third-step" value="Save"/>
                <button type="button" class="btn btn-warning" id="closeEducationModal" data-dismiss="modal">Cancel</button>
            </div>
        </form>
        </div>
    </div><!-- modal-dialog -->
</div>
<!-- Education Modal -->



<!-- Education Modal -->
<div id="experienceModal" class="modal fade">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content ">
          
            <form id="experienceModalForm" class="form-horizontal"  method="POST" enctype="multipart/form-data">
                @csrf 
            <div class="modal-body">
                
                <div class="row row-sm mb-4">
                    <div class="col-lg">
                        <label class="form-label">Working Experience</label>   
                    </div>
                </div>

                <div class="row row-sm mb-4">
                    <div class="col-lg">
                        <label class="form-label">Title</label>
                        <input class="form-control" placeholder="Title" required id="working_title" name="working_title" type="text">
                    </div>
                </div>

                <div class="row row-sm mb-4">
                    <div class="col-lg">
                        <label class="form-label">Employment Type</label>
                        <input class="form-control" placeholder="Employment Type" required id="working_employment_type" name="working_employment_type" type="text">
                    </div>

                   
                </div>

                <div class="row row-sm mb-4">
                    <div class="col-lg">
                        <label class="form-label">Company Name</label>
                        <input class="form-control" placeholder="Company Name" required id="working_company_name" name="working_company_name" type="text">
                    </div>

                   
                </div>

                <div class="row row-sm mb-4">
                    <div class="col-lg">
                        <label class="form-label">Location</label>
                        <input class="form-control" placeholder="Location" required id="working_location" name="working_location" type="text">
                    </div>
                </div>

                <div class="row row-sm mb-4">
                    <div class="col-lg">
                        <label class="form-label">Start Date</label>
                        <input class="form-control" type="month" reuired id="working_start_month" name="working_start_month">
                    </div>

                    <div class="col-lg">
                        <label class="form-label">End Date</label>
                        <input class="form-control" type="month" reuired id="working_end_month" name="working_end_month">
                    </div>
                </div>

                <div class="row row-sm mb-4">
                    <div class="col-lg">
                        <label class="form-label">Industry</label>
                        <input class="form-control" placeholder="Industry" reuired id="working_industry" name="working_industry" type="text">
                    </div>
                </div>

                <div class="row row-sm mb-4">
                    <div class="col-lg">
                        <label class="form-label">Description</label>
                        <textarea class="form-control mb-4"  id="working_description" name="working_description" placeholder="Description" required="" rows="3">Description</textarea>
                      
                    </div>
                </div>

                <div class="row row-sm mb-4">
                    <div class="col-lg">
                        <label class="form-label">Profile Headline</label>
                        <input class="form-control" placeholder="Profile Headline" reuired id="working_profile_headline" name="working_profile_headline" type="text">
                    </div>
                </div>

                <div class="row row-sm mb-4">
                    <div class="col-lg">
                        <label class="form-label">Skills</label>
                       <input type="text" value="" name="working_skills" id="working_skills" placeholder="Type Skills" data-role="tagsinput">
                        {{-- <select class="form-control select2" data-placeholder="Choose Skills" multiple required id="working_skills" name="working_skills[]">
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
                        </select> --}}

                    </div>
                </div>

                <div class="row row-sm mb-4">
                    <div class="col-lg">
                        <label class="form-label">Media</label>
                        <input class="form-control" placeholder="Media" reuired id="working_media" name="working_media" type="text">
                    </div>
                </div>

            </div>
            
            <div class="modal-footer">
                <input type="submit" class="btn btn-primary four-step" value="Save"/>
                <button type="button" class="btn btn-warning four-step" id="closeWorkingModal" data-dismiss="modal">Cancel</button>
            </div>
        </form>
        </div>
    </div><!-- modal-dialog -->
</div>
<!-- Education Modal -->


<!-- SMALL MODAL -->
<div class="modal fade" id="successModal">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body text-center">
                <h6 class="modal-title">Data Update Succesfully!</h6>
            </div>
            <div class="modal-footer justify-content-center" >
                <button type="button" class="btn btn-warning" onclick="pageLoad()" data-dismiss="modal">Cancel</button>
                <span id="appendNextButton"></span>
            </div>
        </div>
    </div>
</div>




<!-- Education Modal -->
<div id="educationEditModal" class="modal fade">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content "> 
            <div id="educationEditModalResponse"></div>
        </div>
    </div><!-- modal-dialog -->
</div>
<!-- Education Modal -->




<!-- Working Modal -->
<div id="workingEditModal" class="modal fade">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content ">
            <div id="workingEditModalResponse"></div>
        </div>
    </div><!-- modal-dialog -->
</div>
<!-- Working Modal -->


<div class="modal fade" id="profileComplete">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body text-center">
                <h6 class="modal-title">Profile Complete Succesfully!</h6>
            </div>
            <div class="modal-footer justify-content-center" >
                {{-- <button type="button" class="btn btn-warning" data-dismiss="modal">Go To Subscription</button> --}}

                @if (isset(Auth::user()->skills))
                <a class="btn btn-warning" type="button" onclick="pageLoad()">Finish</a>
                @else
                <a class="btn btn-warning" type="button" href="{{ route('subscription.listing') }}">Go To Subscription</a>
                @endif
                <span id="appendNextButton"></span>
            </div>
        </div>
    </div>
</div>

<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA6BmocvpwcxPuvHXiN8-2NC_ISxYKeYzc&callback=initAutocomplete&libraries=places&v=weekly"
    async
></script>


@include('admin.includes.google-map')

@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/additional-methods.min.js"></script>
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA6BmocvpwcxPuvHXiN8-2NC_ISxYKeYzc&callback=initAutocomplete&libraries=places&v=weekly"
    async
></script>

@include('admin.includes.js-delete')



@include('admin.includes.profile-script')

<script>
    function closeModal(){
        $('#successModal').modal('toggle');
    }
    var steps = $("fieldset").length;
    function setProgressBar(currentStep) {
        var percent = parseFloat(100 / steps) * currentStep;
        percent = percent.toFixed();
        $(".progress-bar")
            .css("width", percent + "%")
            $(".progress-bar")
            .html(percent + "%")
    }

    function goToNextOne(current){
        setProgressBar(++current);
        $(".step-one").hide();
        $(".step-two").show();
        $("#progressbar li").removeClass('active');
        $("#progressbar #step2").addClass('active');
        $('#successModal').modal('toggle');
    }

    function goToNextTwo(current){
        setProgressBar(++current);

        $(".step-two").hide();
        $(".step-three").show();
        $("#progressbar li").removeClass('active');
        $("#progressbar #step3").addClass('active');
        $('#successModal').modal('toggle');
    }

    function goToNextThree(current){
        setProgressBar(++current);

        $(".step-three").hide();
        $(".step-four").show();
        $("#progressbar li").removeClass('active');
        $("#progressbar #step4").addClass('active');
        $('#successModal').modal('toggle');

    }


    function goToNextFour(current){
        setProgressBar(++current);

        $(".step-four").hide();
        $(".step-five").show();
        $("#progressbar li").removeClass('active');
        $("#progressbar #step5").addClass('active');
        $('#successModal').modal('toggle');

    }

    // function goToNextFive(){

    //     $('#successModal').modal('toggle');
    //     window.location.reload();

    // }
function getEducationData(){
        $.ajax({
            url: '/user/educations/getlist',
            type:"GET",
            success:function(response){
                console.log("helo"+response);
            
                // educationList
                $("#educationList").empty();
                $("#educationList").html(response);
            
            },
            error: function(response) {
                // alert("failed")
            }
        });
    }
    function getWorkData(){
        $.ajax({
            url: '/user/workexperiences/getlist',
            type:"GET",
            success:function(response){

            
                // educationList
                $("#workList").empty();
                $("#workList").html(response);
            
            },
            error: function(response) {
                // alert("failed")
            }
        });
    }

    function pageLoad(){
        window.location.reload();
    }
    

</script>

<script src="http://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
<script src="{{ asset('js/stepForm.js' )}}"></script>
@endsection