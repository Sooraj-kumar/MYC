@extends('layouts.app')
@section('content')
	<section id="job-banner">
        <div class="job-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 p-3">
                        <div class="contact-detail">
                            <h4>Jobs Detail</h4>	
                            <nav aria-label="breadcrumb">
                              <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item"><a href="/jobs">Jobs</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $job_detail->job_title }}</li>
                              </ol>
                            </nav>
                        </div>	
                    </div>
                </div>

                
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="job-detail">
                        <h4>PHP Developer</h4>
                        <h6>4 Ace Technologies
                        </h6>
                        <hr>
                        
                        <h5>Required Skills</h5>
                        <p>Web Designer Responsibilities include: · Executing all visual design stages from concept to final hand-off to engineering · Conceptualizing original website . Web Designer Responsibilities include: · Executing all visual design stages from concept to final hand-off to engineering · Conceptualizing original website ...</p>
                        <p>Education/ Qualification: <span class="badge bg-dark rounded-pill">BSC</span></p>
                        <p>Experience: <span class="badge bg-dark rounded-pill">2 years in relevent field</span></p>
                        <p>Job Category: <span class="badge bg-dark rounded-pill">Private</span></p>
                        <p>Location: <span class="badge bg-dark rounded-pill">Karachi</span></p>
                        <p>Age Limit: <span class="badge bg-dark rounded-pill">18-30</span></p>
                        <p>Last Date: <span class="badge bg-dark rounded-pill">10th October 2022</span></p>
                        
                    
                    </div>
                </div>
                <div class="col sm-4">
                    <div class="card">
                        <div class="card-header">
                            <h5>Active Jobs</h5>
                        </div>
                        <div class="card-body">
                            <div class="job-list float-start">
                                <ul>
                                    <li><a href="">Home</a></li>                                
                                    <li><a href="">Home</a></li>                                
                                    <li><a href="">Home</a></li>                                

                                </ul>
                                
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</section>
@endsection