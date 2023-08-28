$(document).ready(function () {
	var currentGfgStep, nextGfgStep, previousGfgStep;
	var opacity;
	var current = 1;
	var steps = $("fieldset").length;

	setProgressBar(current);
	$(".first-step").click(function () {
		var form = $("#custom-step-form");
		form.validate({
			rules: {
				name:'required',
                last_name:'required',
                location:'required',
                phone:'required',
                image:{
                    accept:"jpg,png,jpeg,gif"
                } 
			},
			messages: {
				name:'First Name Required',
                last_name:'Last Name Required',
                location:'Select Location',
               	phone:'Phone Number Required',
                image:{
                    required: "Select Image",
                    accept: "Only image type jpg/png/jpeg/gif is allowed"
                }
			}
		});
		if (form.valid() == true){
			$('#successModal').modal('toggle');
			$("#appendNextButton").html('');
			$("#appendNextButton").append('<a href="javascript:void(0)" onclick="goToNextOne(\'' + current + '\')" class="btn btn-primary">Next </a> ');
			current ++;
			// var form = $("#custom-step-form");
			// var data = $(form).serializeArray();
			// var img=$('#image')[0].files[0].name;
			// data.push({ name: "image", value: img });
			// $.ajax({
   //              url         : '/user/profiles/update',
                
   //              type        : 'POST',
   //              data        : data,
   //              success:function(response){

   //              },
   //              error: function(response) {
   //              // alert("failed")
   //              }

   //          });

   				$.ajax({
                        type        : 'POST',
                        url         : '/user/profiles/update', 
                        data        : new FormData(document.getElementById("custom-step-form")),
                        contentType:false,
                        processData:false,
                        success:function(response){
                            
                    	},
                        error: function(response) {
                        // alert("failed")
                        }

                    })
		}
		else{
			return false;
		}
	});
	
	$(".second-step").click(function () {
		
		$('#successModal').modal('toggle');
		$("#appendNextButton").html('');
		$("#appendNextButton").append('<a href="javascript:void(0)" onclick="goToNextTwo(\'' + current + '\')" class="btn btn-primary">Next </a> ');
		current ++;
		var form = $("#custom-step-form");
		var data = $(form).serialize();
		console.log(data);
		$.ajax({
            url         : '/user/profiles/update', 
            type        : 'POST',
            data        : data,
            success:function(response){

            },
            error: function(response) {
            // alert("failed")
            }

        });
		
	});
	$(".third-step").click(function () {
		
		const validator =  jQuery('#educationModalForm').validate({ // initialize the plugin
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
						var form = $("#educationModalForm");
                        var data = $(form).serialize();
                        $.ajax({
                            url: '/user/educations/store',
                            type:"POST",
                            data:data,
                            success:function(response){

                                $("#closeEducationModal").trigger( "click" );
                               
                                getEducationData();
                                $('#successModal').modal('toggle');
								$("#appendNextButton").html('');
								$("#appendNextButton").append('<a href="javascript:void(0)" onclick="goToNextThree(\'' + current + '\')" class="btn btn-primary">Next </a> ');
                            	current++;
                            },
                            error: function(response) {
                                // alert("failed")
                            }
                        });
                        // 
                    }
    
            });
		
	});

	$(".four-step").click(function () {
		
		const validators =  jQuery('#experienceModalForm').validate({ // initialize the plugin
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
					var form = $("#experienceModalForm");
                    var data = $(form).serialize();
                    $.ajax({
                        url: '/user/workexperiences/store',
                        type:"POST",
                        data:data,
                        success:function(response){

                            getWorkData();
                            $("#closeWorkingModal").trigger( "click" );
                            $('#successModal').modal('toggle');
                            $("#appendNextButton").html('');
							$("#appendNextButton").append('<a href="javascript:void(0)" onclick="goToNextFour(\'' + current + '\')" class="btn btn-primary">Next </a> ');
							current++;


                        },
                        error: function(response) {
                            // alert("failed")
                        }
                    });
                        // 
                    }
		
		});

	});

	$(".next-step").click(function () {
		$("#progressbar li").removeClass('active');
		currentGfgStep = $(this).parent();
		nextGfgStep = $(this).parent().next();
		console.log($("#progressbar li").eq($("fieldset").index(nextGfgStep)));
		$("#progressbar li").eq($("fieldset").index(nextGfgStep)).addClass("active");
		$('.custom-steps').hide();
		nextGfgStep.show();
		
		setProgressBar(++current);
	});

	$(".previous-step").click(function () {
		$("#progressbar li").removeClass('active');
		currentGfgStep = $(this).parent();
		previousGfgStep = $(this).parent().prev();
		console.log(nextGfgStep);

		$("#progressbar li").eq($("fieldset").index(previousGfgStep)).addClass("active");
		$('.custom-steps').hide();

		previousGfgStep.show();
		setProgressBar(--current);
	});

	function setProgressBar(currentStep) {
		var percent = parseFloat(100 / steps) * current;
		percent = percent.toFixed();
		$(".progress-bar")
			.css("width", percent + "%")
			$(".progress-bar")
			.html(percent + "%")
	}

	$(".submit").click(function () {
		return false;
	})

	$("#final-finish").click(function () {
		var form = $("#custom-step-form");
		var skills=jQuery('#skills').val().length;
        if(skills == 0){
            $('#skills').after("<label id='skills-error' class='error' for='skills'>Add Skills</label>");
            return;
        }
        var data = $(form).serialize();
        $.ajax({
            url         : '/user/profiles/update', 
            type        : 'POST',
            data        : data,
            success:function(response){
            	$('#profileComplete').modal('toggle');
            },
            error: function(response) {
            // alert("failed")
            }

        })	
	});
	function getEducationData(){
        $.ajax({
            url: '/user/educations/getlist',
            type:"GET",
            success:function(response){

            
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
	$(document).on('click','#progressbar li',function(){
	    $('#progressbar li').removeClass('active');
	    $(this).addClass('active');
	    var curr_step=$(this).attr('id');
	    $('.custom-steps').hide();
	    if(curr_step ==='step1'){
	    	current = 1;
	    	setProgressBar(current);
	    	$('.step-one').show();
	    }
	    else if(curr_step ==='step2'){
	    	current = 2;
	    	setProgressBar(current);
	    	$('.step-two').show();
		}
	    else if(curr_step ==='step3'){
	    	current = 3;
	    	setProgressBar(current);
	    	$('.step-three').show();
	    }
	    else if(curr_step ==='step4'){
	    	current = 4;
	    	setProgressBar(current);
	    	$('.step-four').show();
	    }
	    else if(curr_step ==='step5'){
	    	current = 5;
	    	setProgressBar(current);
	    	$('.step-five').show();
	    }
	})  
});
