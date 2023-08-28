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
								<div class="card-body">

									<form id="forgotForm" novalidate method="post" action="{{route('forgot.password')}}">
										@csrf

									<div class="text-center title-style mb-6">
										<h1 class="mb-2">Forgot Password</h1>
										<hr>
										<p class="text-muted">Enter Email</p>
									</div>
									<div class="input-group mb-4">
										<div class="input-group-prepend">
											<div class="input-group-text">
												<i class="fe fe-mail"></i>
											</div>
										</div>
										<input class="form-control" name="email" placeholder="Enter Email" type="text" autocomplete="off">
									</div>
									{{-- <div class="form-group">
										<label class="custom-control custom-checkbox">
											<input type="checkbox" class="custom-control-input" />
											<span class="custom-control-label"><a href="terms.html">Agree the terms and policy</a></span>
										</label>
									</div> --}}
									<div class="row">
										<div class="col-12">
											<button type="submit" class="btn  btn-primary btn-block px-4"><i class="fe fe-send"></i> Send</button>
										</div>
									</div>
									{{-- <div class="text-center pt-4">
										<div class="font-weight-normal fs-16">Forget it <a class="btn-link font-weight-normal" href="#">Send me back</a></div>
									</div> --}}
									<div class="text-center pt-4">
										<div class="font-weight-normal fs-16">Already have an account <a class="btn-link font-weight-normal" href="{{ route('login') }}">SignIn</a></div>
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
        

@endsection