@extends('layouts.app')
@section('content')
	<section id="contact-banner">
		<div class="contact-header">
			<div class="container">
				<div class="row">
				<div class="col-md-6 col-sm-6 p-3">
					<div class="contact-detail mt-5">
						<h4>Thanks for Contact Us</h4>	
						<p>Fill in your detail. Our team are ready to answer your question. </p>  	
					</div>	
				</div>
				<div class="col-md-6 col-sm-6 text-center p-3">
					<div class="banner-img">
						<img src="image/contact-banner.svg" class="img-fluid">
					</div>	
				</div>
			</div>
			</div>
		</div>
		<div class="container">
			
			<div class="contact-row">
				<div class="row">
					<div class="col-md-6 col-sm-6 p-5">
						<div class="contact-info">
							<ul>
								<li>
									<i class="fa fa-user"></i><span class="email-content"><i>	SOORAJ KUMAR</i></span>
								</li>
								<li>
									<i class="fa fa-envelope"></i><span class="email-content"><i>				Soorajkumar276@gmail.com</i></span>
								</li>
								<li>
									<i class="fa fa-phone"></i><span class="email-content"><i>	+923402796543</i></span>
								</li>
								<li>
									<i class="fa fa-map-marker"></i><span class="email-content"><i>	Jam Zafar Mohalla Dad Road Daharki, District Ghotki.</i></span>
								</li>
							</ul>	
						</div>
					</div>	
					<div class="col-md-6 col-sm-6 text-center p-5">
						<div class="form-group">
							<input type="text" name="name" class="form-control" placeholder="Name">
						</div>
						<div class="form-group">
							<input type="email" name="email" class="form-control" placeholder="Email">
						</div>
						<div class="form-group">
							<input type="phone" name="phone" class="form-control" placeholder="Mobile">
						</div>	
						<div class="form-group">
							<textarea class="form-control" placeholder="Message..."></textarea>
						</div>
						<div class="contact-btn">
							<a href="#" class="btn btn-primary btn-sm">Submit</a>	
						</div>
					</div>
				</div>
			</div>
		</div>	
	</section>
@endsection