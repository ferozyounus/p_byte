@extends('layouts.dashboard.main')

@section('head')

<style>
  .error{
    color: rgb(255, 0, 0);
  }
</style>
    <link rel="stylesheet" href="http://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">

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
                <div class="d-md-flex">
                    <div class="col-md-4">
                    <div class="border border-right-0 br-tl-7 br-bl-7">
                        <div class="panel panel-primary tabs-style-4">
                            <div class="tab-menu-heading border-top-0 border-bottom-0 border-left-0 br-tr-0">
                                <div class="tabs-menu ">
                                    <!-- Tabs -->
                                    <ul class="nav panel-tabs">
                                        <li class="" style="width: 100%;"><a href="#tab21" id="btntab21" class="active" data-toggle="tab">Personal Details</a></li>
                                        <li style="width: 100%;"><a href="#tab22" id="btntab22" class="@if (Auth::user()->personal_detail_check == 1) @else disabled @endif " data-toggle="tab">About Me</a></li>
                                        <li style="width: 100%;"><a href="#tab23" id="btntab23" class="@if (Auth::user()->about_me_check == 1) @else disabled @endif " data-toggle="tab">Education</a></li>
                                        <li style="width: 100%;"><a href="#tab24" id="btntab24" class="@if (Auth::user()->education_check == 1) @else disabled @endif " data-toggle="tab">Work Experience</a></li>
                                        <li style="width: 100%;"><a href="#tab25" id="btntab24" class="@if (Auth::user()->work_experience_check == 1) @else disabled @endif " data-toggle="tab">Skills</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-8">
                    <div class="tabs-style-4">
                        <div class="panel-body tabs-menu-body br-tr-7 br-tl-0 br-bl-0 ">
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab21">

                                    <form id="userUpdateFormOne" class="form-horizontal"  method="POST" enctype="multipart/form-data">
                                        @csrf 
                                    <div class="row">
                                        
                                        <div class="col-lg-12 col-md-12 mb-5">
                                            <div class="col-lg-6">
                                                <label class="form-label">Profile Image</label>
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
                                                <label class="form-label">Occupation</label>
                                                <input class="form-control" type="text" value="{{ Auth::user()->occupation }}" id="occupation" name="occupation" placeholder="Add Occupation" required data-role="">
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12 mb-5">
                                            <div class="col-lg">
                                                <label class="form-label">Website Url</label>
                                                <input class="form-control" value="{{ Auth::user()->website_url === null ? old('website_url') : Auth::user()->website_url }}" required id="website_url" name="website_url" placeholder="Website Url" type="url">
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

                                        <div class="col-lg-12 col-md-12 mb-5">
                                            <div class="col-lg text-right">
                                                
                                                <input type="submit" class="btn btn-primary" value="submit"/>

                                                {{-- <a href="#tab22" data-toggle="tab" class="btn btn-primary">Next </a> --}}
                                            </div>
                                        </div>
                                       

                                    
                                    </div>
                                </form>
                                
                                </div>
                                <div class="tab-pane" id="tab22">
                                    <form id="userUpdateFormTwo" class="form-horizontal"  method="POST" enctype="multipart/form-data">
                                        @csrf 
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 mb-5">
                                            <label class="form-label">Biography</label>
                                            <input type="hidden" name="formType" value="biography" class="form-control" />
                                         </div>

                                        <div class="col-lg-12 col-md-12 mb-5">
                                            <label class="form-label">Job Description</label>
                                            <textarea class="content" id="job_description" name="job_description">{{ Auth::user()->job_description === null ? old('job_description') : Auth::user()->job_description }}"</textarea>
                                        </div>

                                        <div class="col-lg-12 col-md-12 mb-5">
                                            <div class="col-lg text-right">
                                                <input type="submit" class="btn btn-primary" value="submit"/>
                                                {{-- <a href="#tab23" data-toggle="tab" class="btn btn-primary">Next </a> --}}
                                            </div>
                                        </div>

                    
                                    </div>

                                </form>
                                </div>
                                <div class="tab-pane" id="tab23">
                                   
                                   
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

                                        <div class="col-lg-12 col-md-12 mb-5">
                                            <div class="col-lg text-right">
                                              
                                                {{-- <a href="#tab24" data-toggle="tab" class="btn btn-primary">Next </a> --}}
                                            </div>
                                        </div>

                    
                                    </div>
                                
                                </div>
                                <div class="tab-pane" id="tab24">
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

                                        <div class="col-lg-12 col-md-12 mb-5">
                                            <div class="col-lg text-right">
                                              
                                                {{-- <a href="#tab25" data-toggle="tab" class="btn btn-primary">Next </a> --}}
                                            </div>
                                        </div>

                    
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab25">
                                    
                                    <form id="userUpdateFormThree" class="form-horizontal"  method="POST" enctype="multipart/form-data">
                                        @csrf 

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
                                           {{--  <select class="form-control select2" data-placeholder="Choose Skills" multiple required id="skills" name="skills[]">
												<option value="Firefox" {{((Auth::user()->skills !== null) && (in_array("Firefox", $skills))) ? 'selected':''}}>
													Firefox
												</option>
												<option value="Chrome" {{((Auth::user()->skills !== null) && (in_array("Chrome", $skills))) ? 'selected':''}}>
													Chrome
												</option>
												<option value="Safari" {{((Auth::user()->skills !== null) && (in_array("Safari", $skills))) ? 'selected':''}}>
													Safari
												</option>
												<option value="Opera" {{((Auth::user()->skills !== null) && (in_array("Opera", $skills))) ? 'selected':''}}>
													Opera
												</option>
												<option value="Internet Explorer" {{((Auth::user()->skills !== null) && (in_array("Internet Explorer", $skills))) ? 'selected':''}}>
													Internet Explorer
												</option>
                                                <option value="Frontend Developer" {{((Auth::user()->skills !== null) && (in_array("Frontend Developer", $skills))) ? 'selected':''}}>
                                                    Frontend Developer
                                                </option>
                                                <option value="Backend Developer" {{((Auth::user()->skills !== null) && (in_array("Backend Developer", $skills))) ? 'selected':''}}>
                                                    Backend Developer
                                                </option>
                                                <option value="Visual Studio" {{((Auth::user()->skills !== null) && (in_array("Visual Studio", $skills))) ? 'selected':''}}>
                                                    Visual Studio
                                                </option>
                                                <option value="Sublime" {{((Auth::user()->skills !== null) && (in_array("Sublime", $skills))) ? 'selected':''}}>
                                                    Sublime
                                                </option>
                                                <option value="Atom" {{((Auth::user()->skills !== null) && (in_array("Atom", $skills))) ? 'selected':''}}>
                                                    Atom
                                                </option>
                                                <option value="Sales Executive" {{((Auth::user()->skills !== null) && (in_array("Sales Executive", $skills))) ? 'selected':''}}>
                                                    Sales Executive
                                                </option>
											</select> --}}

                                        </div>
                                        

                                       

                                        <div class="col-lg-12 col-md-12 mb-5">
                                            <div class="col-lg text-right">
                                                <input type="submit" class="btn btn-primary" value="submit"/>
                                                {{-- <a href="#" class="btn btn-primary">Done </a> --}}
                                            </div>
                                        </div>

                    
                                    </div>


                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                <input type="submit" class="btn btn-primary" value="Save"/>
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
                       
                        <select class="form-control select2" data-placeholder="Choose Skills" multiple required id="working_skills" name="working_skills[]">
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
                        </select>

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
                <input type="submit" class="btn btn-primary" value="Save"/>
                <button type="button" class="btn btn-warning" id="closeWorkingModal" data-dismiss="modal">Cancel</button>
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
                <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>

                {{-- <a style="cursor: pointer;" onclick="closeModal()" class="btn btn-info" type="button">Cancel</a> --}}
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


    function goToNextOne(){

        $("#btntab21").removeClass("active");
        $("#btntab22").addClass("active");
        $('#successModal').modal('toggle');

    }

    function goToNextTwo(){

        $("#btntab22").removeClass("active");
        $("#btntab23").addClass("active");
        $('#successModal').modal('toggle');

    }

    function goToNextThree(){

        $("#btntab23").removeClass("active");
        $("#btntab24").addClass("active");
        $('#successModal').modal('toggle');

    }


    function goToNextFour(){

        $("#btntab24").removeClass("active");
        $("#btntab25").addClass("active");
        $('#successModal').modal('toggle');

    }

    function goToNextFive(){

        $('#successModal').modal('toggle');
        window.location.reload();

    }

    

</script>

<script src="http://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>

@endsection