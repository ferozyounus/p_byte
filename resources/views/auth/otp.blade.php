@extends('layouts.simple')

@section('content')


		<div class="page">
			<div class="page-single">
				<div class="container">
					<div class="row">
						<div class="col mx-auto">
							<div class="row justify-content-center">
								<div class="col-md-5">
									<div class="card">
										<div class="card-body" style="display:none;">
											<div class="text-center title-style mb-6">
												<h1 class="mb-2">OTP</h1>
												<hr>
												<p class="text-muted">Forgot Password Page</p>
											</div>
											<div class="input-group mb-4">
												<div class="input-group-prepend">
													<div class="input-group-text">
														<i class="fe fe-mail"></i>
													</div>
												</div>
												<input class="form-control" name="email" placeholder="Enter Email" type="text">
											</div>
											<div class="form-group">
												<label class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" />
													<span class="custom-control-label"><a href="terms.html">Agree the terms and policy</a></span>
												</label>
											</div>
											<div class="row">
												<div class="col-12">
													<button type="button" class="btn  btn-primary btn-block px-4"><i class="fe fe-send"></i> Send</button>
												</div>
											</div>
											<div class="text-center pt-4">
												<div class="font-weight-normal fs-16">Forget it <a class="btn-link font-weight-normal" href="#">Send me back</a></div>
											</div>
										</div>
                                        <div class="card-body">
                                            <form id="form" >           
                                                <h1 class="card-title text-center">OTP</h1>               
                                                <h4 class="card-title text-center">VERIFICATION</h4>
                                                <div class="row">
                                                    
                                                    <div class="col-2 m-t-20" >
                                                        <input class="form-control text-center" name="dig1" id="digit1" type="text" >
                                                    </div>
                                                    <div class="col-2 m-t-20" >
                                                        <input class="form-control text-center" name="dig2" id="digit2" type="text" >
                                                    </div>
                                                    <div class="col-2 m-t-20" >
                                                        <input class="form-control text-center" name="dig3" id="digit3" type="text" >
                                                    </div>
                                                    <div class="col-2 m-t-20" >
                                                        <input class="form-control text-center" name="dig4" id="digit4" type="text" >
                                                    </div>
                                                    <div class="col-2 m-t-20" >
                                                        <input class="form-control text-center" name="dig5" id="digit5" type="text" >
                                                    </div>
                                                    <div class="col-2 m-t-20" >
                                                        <input class="form-control text-center verifyAccountAjax" name="dig6" id="digit6" type="text" >
                                                    </div>
                                                </div>
                                                    
                                               
                                                    <div class="row mt-5">
                                                        <div class="col-12 text-center">
                                                            <p>
                                                                The verification code has been sent at "{{$email}}"
                                                            </p>
                                                            <p id="sendCodeAgain"  class="new-on">Not received Email? <a href="javascript:;" style="color:#cf1d25;">Send Again?</a></p>
                                                        </div>
                                                    </div>

                                                    <div class="text-center pt-2">
                                                        <div class="font-weight-normal fs-16">Go Back To  <a class="btn-link font-weight-normal" href="{{ route('login') }}">SignIn</a></div>
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
		</div>

	

        @endsection
        @section('scripts')
                <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/additional-methods.min.js"></script>
        
                <script>

                    $(".verifyAccountAjax").keyup(function(e){
                        
                        e.preventDefault();
                        var digit1 = $("#digit1").val();
                        var digit2 = $("#digit2").val();
                        var digit3 = $("#digit3").val();
                        var digit4 = $("#digit4").val();
                        var digit5 = $("#digit5").val();
                        var digit6 = $("#digit6").val();
                        var verifyCode = digit1+digit2+digit3+digit4+digit5+digit6;
                        
                        if(digit1!="" && digit2!="" && digit3!="" && digit4!="" && digit5!="" && digit6!=""){
                                $.ajax({
                                    type:'post',
                                    data: {
                                        "_token": "{{ csrf_token() }}",
                                        "verifyCode": verifyCode,
                                    },
                                    url: "{{url('verify-account/')}}"+"/"+"{{\Crypt::encrypt($user_id)}}",
                                    beforeSend:function(){
                                       
                                    },
                                    success:function(data){
                                        
                                        if(data.status=='success'){
                                       
                                            window.location.href="{{URL::to('user/subscription/listing')}}";
                                        }
                                        if(data.status=='error'){
                    
                                           
                                            toastr.error("Verfication Code is not valid", "Alert");
                                        }
                                
                                    },
                                    error: function(res)
                                    {
                                        
                    
                                    }
                                })
                            }
                            else{
                                toastr.error("Please enter your verification code", "Alert");
                                
                            }
                        })
                    
                    
                                 $('#digit1').on('keyup',function(){
                            
                                    if($(this).val().length == 1){
                                        var input = document.getElementById("digit2").focus();
                                    }
                                });
                                $('#digit2').on('keyup',function(){
                                    
                                    if($(this).val().length == 1){
                                        var input = document.getElementById("digit3").focus();
                                    }
                                });
                                $('#digit3').on('keyup',function(){
                                    
                                    if($(this).val().length == 1){
                                        var input = document.getElementById("digit4").focus();
                                    }
                                });
                                $('#digit4').on('keyup',function(){
                                    
                                    if($(this).val().length == 1){
                                        var input = document.getElementById("digit5").focus();
                                    }
                                });
                                $('#digit5').on('keyup',function(){
                                    
                                    if($(this).val().length == 1){
                                        var input = document.getElementById("digit6").focus();
                                    }
                                });
                    
                    
                    
                                $("#sendCodeAgain").click(function(){
                            user_id = "{{\Crypt::encrypt($user_id)}}";
                            
                            $.ajax({
                                type:'GET',
                                data: {
                                    "user_id": user_id,  
                                },
                                url: "{{url('registration-resend-code/')}}"+"/"+"{{\Crypt::encrypt($user_id)}}",
                                beforeSend:function(){
                                   
                                },
                                success:function(data){
                                
                                    if(data.status=='success'){
                                       toastr.success("Email Has Been Sent", "Alert");
                    
                                    }
                                    if(data.status=='error'){
                                        toastr.error("Error While Sending Email", "Alert");
                                    }
                                },
                                error: function(res)
                                {
                                    
                    
                                }
                            })
                        });
                    
                            </script>
        
        @endsection
       
       
       
