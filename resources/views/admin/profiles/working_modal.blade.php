@section('head')

    <link rel="stylesheet" href="http://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
@endsection
<form id="experienceModalUpdateForm" class="form-horizontal"  method="POST" enctype="multipart/form-data">
    @csrf 
<div class="modal-body">
    
    <div class="row row-sm mb-4">
        <div class="col-lg">
            <label class="form-label">Working Experience</label>
            
        </div>

    </div>

    <input  type="hidden" class="form-control" value="{{ $workexperiences->id }}" name="working_id">

    <div class="row row-sm mb-4">
        <div class="col-lg">
            <label class="form-label">Title</label>
            <input class="form-control" placeholder="Title" value="{{ $workexperiences->working_title }}" required id="working_title" name="working_title" type="text">
        </div>
    </div>


    <div class="row row-sm mb-4">
        <div class="col-lg">
            <label class="form-label">Employment Type</label>
            <input class="form-control" placeholder="Employment Type" value="{{ $workexperiences->working_employment_type }}" required id="working_employment_type" name="working_employment_type" type="text">
        </div>

       
    </div>

    <div class="row row-sm mb-4">
        <div class="col-lg">
            <label class="form-label">Company Name</label>
            <input class="form-control" placeholder="Company Name" value="{{ $workexperiences->working_company_name }}" required id="working_company_name" name="working_company_name" type="text">
        </div>

       
    </div>


    <div class="row row-sm mb-4">
        <div class="col-lg">
            <label class="form-label">Location</label>
            <input class="form-control" placeholder="Location" value="{{ $workexperiences->working_location }}" required id="working_location" name="working_location" type="text">
        </div>
    </div>

    <div class="row row-sm mb-4">
        <div class="col-lg">
            <label class="form-label">Start Date</label>
            <input class="form-control" type="month" value="{{ $workexperiences->working_start_month }}" required id="working_start_month" name="working_start_month">
        </div> 

        <div class="col-lg">
            <label class="form-label">End Date</label>
            <input class="form-control" type="month" value="{{ $workexperiences->working_end_month }}" required id="working_end_month" name="working_end_month">
        </div>
    </div>


    <div class="row row-sm mb-4">
        <div class="col-lg">
            <label class="form-label">Industry</label>
            <input class="form-control" placeholder="Industry" value="{{ $workexperiences->working_industry }}" required id="working_industry" name="working_industry" type="text">
        </div>
    </div>

    <div class="row row-sm mb-4">
        <div class="col-lg">
            <label class="form-label">Description</label>
            <textarea class="form-control mb-4"  id="working_description" name="working_description" placeholder="Description" required="" rows="3">{{ $workexperiences->working_description }}</textarea>
          
        </div>
    </div>


    <div class="row row-sm mb-4">
        <div class="col-lg">
            <label class="form-label">Profile Headline</label>
            <input class="form-control" placeholder="Profile Headline" value="{{ $workexperiences->working_profile_headline }}" required id="working_profile_headline" name="working_profile_headline" type="text">
        </div>
    </div>

    <div class="row row-sm mb-4">
        <div class="col-lg">
            <label class="form-label">Skillsss</label>
            <input type="text" value="{{$workexperiences->working_skills }}" name="working_skills" id="working_skills" placeholder="Type Skills" data-role="tagsinput">
            {{-- @php
                                               
            if($workexperiences->working_skills !== null){
                $workingskills = explode(',' ,$workexperiences->working_skills);
            }
            
        @endphp


            <select class="form-control select2" required data-placeholder="Choose Skills" multiple id="working_skills" name="working_skills[]">
                <option value="Firefox" {{(($workexperiences->working_skills !== null) && (in_array("Firefox", $workingskills))) ? 'selected':''}}>
                    Firefox
                </option>
                <option value="Chrome" {{(($workexperiences->working_skills !== null) && (in_array("Chrome", $workingskills))) ? 'selected':''}}>
                    Chrome
                </option>
                <option value="Safari" {{(($workexperiences->working_skills !== null) && (in_array("Safari", $workingskills))) ? 'selected':''}}>
                    Safari
                </option>
                <option value="Opera" {{(($workexperiences->working_skills !== null) && (in_array("Opera", $workingskills))) ? 'selected':''}} >
                    Opera
                </option>
                <option value="Internet Explorer" {{(($workexperiences->working_skills !== null) && (in_array("Internet Explorer", $workingskills))) ? 'selected':''}}>
                    Internet Explorer
                </option>
            </select> --}}

        </div>
    </div>


    <div class="row row-sm mb-4">
        <div class="col-lg">
            <label class="form-label">Media</label>
            <input class="form-control" placeholder="Media" value="{{ $workexperiences->working_media }}" required id="working_media" name="working_media" type="text">
        </div>
    </div>


</div>

<div class="modal-footer">
    <input type="submit" class="btn btn-primary" value="Save"/>
    <button type="button" class="btn btn-warning closeModal"  data-dismiss="modal">Cancel</button>
</div>
</form>


<!-- INTERNAL Select2 js -->
<script src="{{asset('admin/plugins/select2/select2.full.min.js')}}"></script>
<script src="{{asset('admin/js/select2.js')}}"></script>


<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/additional-methods.min.js"></script>
<script>

    jQuery(document).ready(function () {

        const validatorEducationUpdate =  jQuery('#experienceModalUpdateForm').validate({ // initialize the plugin
            rules: {
    
                    working_title:'required',
                    working_employment_type:'required',
                    working_company_name:'required',
                    working_location:'required',
                    working_start_month:'required',
                    working_end_month:'required',
                    working_industry:'required',
                    working_profile_headline:'required',
                    working_skills:'required',
                    working_media:'required',

                },
                messages: {

                    working_title:'Working Title Required',
                    working_employment_type:'Employment Type Required',
                    working_company_name:'Company Name Required',
                    working_location:'Select Location',
                    working_start_month:'Select Start Date',
                    working_end_month:'Select End Date',
                    working_industry:'Industry Required',
                    working_profile_headline:'Profile Headline Required',
                    working_skills:'Select Skills',
                    working_media:'Media Required',
                    },
            

                            submitHandler: function(form) {
                                
                                
                                var data = $(form).serialize();
                                $.ajax({
                                            url: '{{ URL::route('workexperiences.update') }}',
                                            type:"POST",
                                            data:data,
                                            success:function(response){
            
                                                $(".closeModal").trigger( "click" );
                                                getWorkData();
                                                
                                            },
                                            error: function(response) {
                                                alert("failed")
                                            }
                                        });
                                // 
                            }
            
                    });


                    function getWorkData(){
                            $.ajax({
                                        url: '{{ URL::route('workexperiences.getlist') }}',
                                        type:"GET",
                                        success:function(response){
        
                                        
                                            // educationList
                                            $("#workList").empty();
                                            $("#workList").html(response);
                                        
                                        },
                                        error: function(response) {
                                            alert("failed")
                                        }
                                    });
                    }   

     });
</script>
<script src="http://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
