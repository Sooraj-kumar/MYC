@extends('layouts.app')
@section('content')
	<!-------------Sign in Section--------------->    
	<section id="sign-in-form" style="margin: 5% 0 15%;">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4 col-sm-4 mt-5 mb-5" style="margin: auto;">
					<form method="POST" action="{{ route('login') }}" class="mt-5 needs-validation" novalidate>
						@csrf
						<h2 class="text-center"><b>Login</b></h2>
						<h6 class="text-center">Please Login your account</b></h6><br><br>
						@if(Session::get('error'))
                        	<div class="alert alert-danger alert-dismissible fade show" role="alert"">
                            	{{Session::get('error')}}
								<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        	</div>
                    	@endif
						<div class="form-group">
						    <input name="email" type="text" class="form-control" placeholder="Email Address" id="validationCustom01" required autofocus>
							<div class="invalid-feedback">
							    Please Input Emaill/Username.
							</div>
	    				</div>	
						<div class="form-group">
				          	<input name="password" type="password" class="form-control" placeholder="Password" id="validationCustom02" required>
							<div class="invalid-feedback">
							    Please Input Password.
							</div>
						</div>	
						<div class="form-group">
							<button type="submit" name="login_btn" class="btn btn-primary btn-sm">Login</button>    	
						</div>
						<div class="forgot-password">
							<p align="center">Don't remember Password? <span><a href="#" style="text-decoration: none;">Forgot Password</a></span></p><hr>
							<p align="center">Create an Account <span><a href="{{route('register')}}" style="text-decoration: none;"> Sign Up</a></span></p>
						</div>
					</form>
				</div>
			</div>
		</div>	
	</section>
@endsection
