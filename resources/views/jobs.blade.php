@extends('layouts.app')
@section('content')
	<section id="job-banner">
		<div class="job-header">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6 p-3">
						<div class="contact-detail mt-5">
							<h4>Jobs</h4>	
							<q>Just limited jobs are here.</q>  	
						</div>	
					</div>
					<div class="col-md-6 col-sm-6 text-center p-3">
						<div class="banner-img">
							<img src="image/jobs.svg" class="img-fluid">
						</div>	
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<h3><span><i class="fa-solid fa-briefcase"></i></span> Open Job Positions</h3>
					<div class="job-cards">
						@foreach ($jobs as $job)
						<div class="card p-2">
							<div class="card-body">
								<h1 class="card-text job-title">{{ $job->job_title }}</h1>
								<span style="padding-right: 8px"><i class="fa-solid fa-briefcase"></i> Company: {{ $job->department }}</span> 
								<span style="padding-right: 8px"><i class="fa-solid fa-calendar-days"></i> Posted on: {{ date("d-m-y",strtotime($job->posted_on)) }}</span>
								<span><i class="fa-solid fa-clock"></i> Last date: {{ date("d-m-y",strtotime($job->last_date)) }}</span>
								<a href="/jobs/job_detail/{{ $job->id }}" class="btn btn-dark rounded-pill">More Detail</a>
							</div>
						</div>			
						@endforeach	
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection