


<script>

    jQuery(document).ready(function () {
    
            // const validator =  jQuery('#educationModalForm').validate({ // initialize the plugin
            //     rules: {
            //         education_title:'required',
            //         education_start_month:'required',
            //         education_end_month:'required',
            //         education_location:'required',
            //     },
            //     messages: {
            //         education_title: "School Or University Name Required",
            //         education_start_month: "Please Select Start Date",
            //         education_end_month: "Please Select End Date",
            //         education_location: "Please Select Location",
            //         },
    
    

            //         submitHandler: function(form) {
                        
            //             var data = $(form).serialize();
            //             $.ajax({
            //                         url: '{{ URL::route('educations.store') }}',
            //                         type:"POST",
            //                         data:data,
            //                         success:function(response){
    
            //                             $("#closeEducationModal").trigger( "click" );
                                       
            //                             getEducationData();
            //                             $('#successModal').modal('toggle');
            //                             // $("#appendNextButton").empty();
            //                             // $("#appendNextButton").append('<a href="#tab24" onclick="goToNextThree()" data-toggle="tab" class="btn btn-primary">Next </a> ');

            //                         },
            //                         error: function(response) {
            //                             // alert("failed")
            //                         }
            //                     });
            //             // 
            //         }
    
            // });
    
            // const validators =  jQuery('#experienceModalForm').validate({ // initialize the plugin
            //     rules: {
    
            //         working_title:'required',
            //         working_employment_type:'required',
            //         working_company_name:'required',
            //         working_location:'required',
            //         working_start_month:'required',
            //         working_end_month:'required',
            //         working_industry:'required',
            //         working_profile_headline:'required',
            //         working_skills:'required',
            //         working_media:'required',
    
            //     },
            //     messages: {
    
            //         working_title:'Working Title Required',
            //         working_employment_type:'Employment Type Required',
            //         working_company_name:'Company Name Required',
            //         working_location:'Select Location',
            //         working_start_month:'Select Start Date',
            //         working_end_month:'Select End Date',
            //         working_industry:'Industry Required',
            //         working_profile_headline:'Profile Headline Required',
            //         working_skills:'Select Skills',
            //         working_media:'Media Required',
            //         },
    
            //         submitHandler: function(form) {
                        
            //             var data = $(form).serialize();
            //             $.ajax({
            //                         url: '{{ URL::route('workexperiences.store') }}',
            //                         type:"POST",
            //                         data:data,
            //                         success:function(response){
    
            //                             getWorkData();
            //                             $("#closeWorkingModal").trigger( "click" );
            //                             $('#successModal').modal('toggle');
            //                             // $("#appendNextButton").empty();
            //                             // $("#appendNextButton").append('<a href="#tab25" onclick="goToNextFour()" data-toggle="tab" class="btn btn-primary">Next </a> ');



            //                         },
            //                         error: function(response) {
            //                             // alert("failed")
            //                         }
            //                     });
            //             // 
            //         }
    
            // });
    
            // const userFormOneValidator =  jQuery('#userUpdateFormOne').validate({ // initialize the plugin
            //     rules: {
            //         // image:'required',
            //             name:'required',
            //             last_name:'required',
            //             location:'required',
            //             occupation:'required',
            //             website_url:'required',
            //             phone:'required',
            //             image:{
            //                 accept:"jpg,png,jpeg,gif"
            //             } 
            //     },
            //     messages: {
            //         // image:'required',
            //             name:'First Name Required',
            //             last_name:'Last Name Required',
            //             location:'Select Location',
            //             occupation:'Select Occupation',
            //             website_url:'Website Url Required',
            //             phone:'Phone Number Required',
            //             image:{
            //                 required: "Select Image",
            //                 accept: "Only image type jpg/png/jpeg/gif is allowed"
            //             } 
            //     },
            //     submitHandler: function(form) {
            //         var language=jQuery('#language').val().length;
            //         if(language == 0){
            //             $('#language').after("<label id='language-error' class='error' for='language'>Add Language</label>");
            //             return;
            //         }
            //         var data = $(form).serialize();
            //         $.ajax({
            //             url         : '{{ URL::route('profiles.update') }}', 
            //             type        : 'POST',
            //             data        : data,
            //             success:function(response){
            //                 console.log(response);
            //                 $('#successModal').modal('toggle');
            //                 $("#appendNextButton").empty();
            //                 $("#appendNextButton").append('<a href="#tab22" onclick="goToNextOne()" data-toggle="tab" class="btn btn-primary">Next </a> ');
                    
            //             },
            //             error: function(response) {
            //             // alert("failed")
            //             }

            //         })
            //     }
                    
            // });
    
            // const userFormTwoValidator =  jQuery('#userUpdateFormTwo').validate({ // initialize the plugin
            //     rules: {
            //          job_description:'required',
                       
            //     },
            //     messages: {
    
            //           job_description:'Job Description Required',
                       
            //         },
    
    
            //         submitHandler: function(form) {
    
            //             var data = $(form).serialize();
    
            //             $.ajax({
            //                     url: '{{ URL::route('profiles.update') }}',
            //                     type:"POST",
            //                     data:data,
            //                     success:function(response){
    
            //                         $('#successModal').modal('toggle');
            //                             $("#appendNextButton").empty();
            //                             $("#appendNextButton").append('<a href="#tab23" onclick="goToNextTwo()" data-toggle="tab" class="btn btn-primary">Next </a> ');



            //                     },
            //                     error: function(response) {
            //                         // alert("failed")
                                   
            //                     }
            //                     });
            //             // 
            //         }
    
            // });
    
            // const userFormThreeValidator =  jQuery('#userUpdateFormThree').validate({ // initialize the plugin
            //     rules: {
            //         skills:'required',    
            //     },
            //     messages: {
            //         skills:'Select Skills', 
            //         },
    
            //         submitHandler: function(form) {
            //             var skills=jQuery('#skills').val().length;
            //             if(skills == 0){
            //                 $('#skills').after("<label id='skills-error' class='error' for='skills'>Add Skills</label>");
            //                 return;
            //             }
            //             var data = $(form).serialize();
    
            //             $.ajax({
            //                     url: '{{ URL::route('profiles.update') }}',
            //                     type:"POST",
            //                     data:data,
            //                     success:function(response){
    
            //                         $('#successModal').modal('toggle');
            //                             $("#appendNextButton").empty();
            //                             $("#appendNextButton").append('<a href="javascript:;" onclick="goToNextFive()" data-toggle="tab" class="btn btn-primary">Done </a> ');

                                
            //                     },
            //                     error: function(response) {
            //                         // alert("failed")
                                
            //                     }
            //                     });
            //             // 
            //             }
    
            // });
    
            // $('#userUpdateFormOne').submit(function(event){
            //         event.preventDefault();
            //         $.ajax({
            //             type        : 'POST',
            //             url         : '{{ URL::route('profiles.update') }}', 
            //             data        : new FormData(this),
            //             contentType:false,
            //             processData:false,
            //             success:function(response){
            //                 console.log(response);
            //                 $('#successModal').modal('toggle');
            //                 $("#appendNextButton").empty();
            //                 $("#appendNextButton").append('<a href="#tab22" onclick="goToNextOne()" data-toggle="tab" class="btn btn-primary">Next </a> ');
                    
            //             },
            //             error: function(response) {
            //             // alert("failed")
            //             }

            //         })
                
            // });

                    // function getEducationData(){
                    //         $.ajax({
                    //                     url: '{{ URL::route('educations.getlist') }}',
                    //                     type:"GET",
                    //                     success:function(response){
        
                                        
                    //                         // educationList
                    //                         $("#educationList").empty();
                    //                         $("#educationList").html(response);
                                        
                    //                     },
                    //                     error: function(response) {
                    //                         // alert("failed")
                    //                     }
                    //                 });
                    // }    

                    // function getWorkData(){
                    //         $.ajax({
                    //                     url: '{{ URL::route('workexperiences.getlist') }}',
                    //                     type:"GET",
                    //                     success:function(response){
        
                                        
                    //                         // educationList
                    //                         $("#workList").empty();
                    //                         $("#workList").html(response);
                                        
                    //                     },
                    //                     error: function(response) {
                    //                         // alert("failed")
                    //                     }
                    //                 });
                    // }   
                            
                    $('body').on('click', '.educationEdit', function() {
                        var Id = $(this).attr('dataId');
                                $.ajax({
                                        url: '{{ URL::route('educations.edit') }}',
                                        type: "POST",
                                            data:{ 
                                                _token:'{{ csrf_token() }}',
                                                "id": Id,
                                            },
                                        success:function(response){
                                           
                                                $("#educationEditModalResponse").empty();
                                                $("#educationEditModalResponse").html(response); 
                                                $('#educationEditModal').modal('toggle');
                                               
                                        },
                                        error: function(response) {
                                            // alert("failed")
                                        
                                        }
                                        });

                    });

                    $('body').on('click', '.workingEdit', function() {
                        var Id = $(this).attr('dataId');
                                $.ajax({
                                        url: '{{ URL::route('workexperiences.edit') }}',
                                        type: "POST",
                                            data:{ 
                                                _token:'{{ csrf_token() }}',
                                                "id": Id,
                                            },
                                        success:function(response){
                                          
                                                $("#workingEditModalResponse").empty();
                                                $("#workingEditModalResponse").html(response); 
                                                $('#workingEditModal').modal('toggle');

                                        },
                                        error: function(response) {
                                            // alert("failed")
                                        
                                        }
                                        });
                    });

        });
        </script>
    