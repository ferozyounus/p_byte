

<form id="educationModalUpdateForm" class="form-horizontal" method="POST" enctype="multipart/form-data">
    @csrf  

    <div class="modal-body">
        <div class="row row-sm mb-4">
            <div class="col-lg">
                <label class="form-label">Education Experience</label>
            </div>

        </div>
        <input  type="hidden" class="form-control" value="{{ $educationExperiences->id }}" name="education_id">

        <div class="row row-sm mb-4">
            <div class="col-lg">
                <label class="form-label">School Or University</label>
                <input class="form-control" placeholder="School Or University" 
                     required id="education_title" value="{{ $educationExperiences->education_title }}" name="education_title" type="text">
            </div>
        </div>


        <div class="row row-sm mb-4">
            <div class="col-lg">
                <label class="form-label">Start Date</label>
                <input class="form-control" type="month" value="{{ $educationExperiences->education_start_month }}" required id="education_start_month" name="education_start_month">
            </div>

            <div class="col-lg">
                <label class="form-label">End Date</label>
                <input class="form-control" type="month" value="{{ $educationExperiences->education_end_month }}" required id="education_end_month" name="education_end_month">
            </div>
        </div>

        

        <div class="row row-sm mb-4">
            <div class="col-lg">
                <label class="form-label">Description</label>
                <textarea class="form-control mb-4"  id="education_description" name="education_description" placeholder="Description" required="" rows="3">{{ $educationExperiences->education_description }}</textarea>
            
            </div>
        </div>


    </div>
    
    <div class="modal-footer">
        <input type="submit" class="btn btn-primary" value="Save"/>
        <button type="button" class="btn btn-warning closeModal"  data-dismiss="modal">Cancel</button>
    </div>
</form>

<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/additional-methods.min.js"></script>
<script>

    jQuery(document).ready(function () {

        const validatorEducationUpdate =  jQuery('#educationModalUpdateForm').validate({ // initialize the plugin
                        rules: {
                            education_title:'required',
                            education_start_month:'required',
                            education_end_month:'required',
                            education_location:'required',
                        },
                        messages: {
                            education_title: "School Or University Name Required",
                            education_start_month: "Please Select Start Date",
                            education_end_month: "Please Select End Date",
                            education_location: "Please Select Location",
                            },
    
            

                            submitHandler: function(form) {
                                
                                
                                var data = $(form).serialize();
                                $.ajax({
                                            url: '{{ URL::route('educations.update') }}',
                                            type:"POST",
                                            data:data,
                                            success:function(response){
            
                                                $(".closeModal").trigger( "click" );
                                                getEducationData();
                                                
                                            },
                                            error: function(response) {
                                                alert("failed")
                                            }
                                        });
                                // 
                            }
            
                    });


                    function getEducationData(){
                            $.ajax({
                                        url: '{{ URL::route('educations.getlist') }}',
                                        type:"GET",
                                        success:function(response){
                                            $("#educationList").empty();
                                            $("#educationList").html(response);
                                        },
                                        error: function(response) {
                                            alert("failed")
                                        }
                                    });
                    }   

     });
</script>