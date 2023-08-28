<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/additional-methods.min.js"></script>

<script>

    jQuery(document).ready(function () {
    
            const loginFormValidator =  jQuery('#loginForm').validate({ // initialize the plugin
                rules: {
                    email:{
                        required: true,
                        email: true
                    },
                    password : {
                        required: true,
                    },	
                },
                messages: {
                    
                    email: {
                        required: "Enter User Email ",
                        email: "Enter Valid Email ",
                    },
                    password : {
                        required: "Password Required",
                    },
                    
                },
    
            });	



            const forgotFormValidator =  jQuery('#forgotForm').validate({ // initialize the plugin
				rules: {
					email:{
						required: true,
						email: true
					}
					
				},
				// messages: {
					
				// 	email: : {
				// 		required: "Email Required",
				// 		email : "Invalid Email",
				// 	},
					
				// },
	
			});	




            const registerFormValidator =  jQuery('#registerForm').validate({ // initialize the plugin
                    rules: {
                        name:'required',
                        email:{
                            required: true,
                            email: true
                        },
                        password : {
                            required: true,
                            minlength : 6
                        },
                        password_confirmation : {
                            required: true,
                            minlength : 6,
                            equalTo : "#password"
                        }
                    },
                    messages: {
                        name: "Enter User Name ",
                        email: {
                            required: "Enter User Email ",
                            email: "Enter Valid Email ",
                        },
                        password : {
                            required: "Password Required",
                            minlength : "Password Should Be Min 6 Digit",
                        },
                        password_confirmation : {
                            required: "Confirm Password Required",
                            minlength : "Password Should Be Min 6 Digit",
                            equalTo : "Confirm Password Does't Match With Password"
                        }
                    },

		   });	




    });

</script>