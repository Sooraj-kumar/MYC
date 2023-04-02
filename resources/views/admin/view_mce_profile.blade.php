@extends('admin.layouts.app')
@section('content')

	<div class="row">
		<div class="col-sm-12">
			<div class="main-title">
                <h2 class="mb-4">
                    MCE Profile
                </h2>
            </div>
            @foreach ($mceProfile as $profile)
            <div class="row">
                <div class="col-sm-3 text-center">
                    <div class="profile-img">
                        <img src="{{ asset('storage/mce_profiles/'.$profile->mce_profile_image) }}" class="img-fluid" style="width: 150px; height: 150px; border-radius: 50%;">
                    </div><br>
                    <i class="fa fa-map-marker"></i>
                    <span class="email-content">{{ $profile->city_title }}</span>
                </div>    
                <div class="col-md-9 col-sm-9">
                    <div class="personal-detail">
                        <h1>{{ $profile->full_name }}</h1>  
                        <span class="badge rounded-pill bg-success">{{ $profile->designation_title }}</span>
                        <hr>
                        <h4><b>Contact</b></h4> 
                        <i class="fa fa-envelope"></i><span class="email-content"> {{ $profile->email }}</span><br>  
                        <i class="fa fa-phone"></i><span class="email-content"> {{ $profile->mobile }}</i></span><br>
                        <i class="fa fa-map-marker"></i><span class="email-content"> {{ $profile->address }}</i></span><br><hr> 
                    </div>  
                    <div class="about-detail">
                        <h4><b>About</b></h4>
                        <p >{{ $profile->about_me }}</p>  
                    </div><hr>
                    <div class="job-detail">
                        <h4><b>Current Status</h4></b></h4>
                        <table class="table table-striped table-hover table-sm table-borderless table-responsive-md">
                            <thead>
                                <tr>
                                    <th class="th-sm">Department/ Company/ Institute</th>
                                    <th class="th-sm">From (Year)</th>
                                    <th class="th-sm">Location</th>
                                </tr>
                            </thead>  
                            <tbody>
                                <tr>
                                    <td>{{ $profile->department }}</td>
                                    <td>{{ $profile->from_year }}</td>
                                    <td>{{ $profile->location }}</td>
                                </tr>
                            </tbody>
                        </table>  
                    </div> 
                    <div class="qualification-table pt-3">
                        <h4><b>Qualification</b></h4>
                        <table id="dt-vertical-scroll" class="table table-striped table-hover table-sm table-borderless table-responsive-md" data-info="false" >
                            <thead>
                                <tr>
                                    <th class="th-sm">Degree</th>
                                    <th class="th-sm">Major</th>
                                    <th class="th-sm">Institute</th>
                                    <th class="th-sm">Completion Year</th>
                                </tr>
                            </thead>  
                            <tbody>
                                <tr>
                                    <td>{{ $profile->degree_title }}</td>
                                    <td>{{ $profile->major }}</td>
                                    <td>{{ $profile->institute }}</td>
                                    <td>{{ $profile->completion_year }}</td>    
                                </tr>
                            </tbody>
                        </table>  
                    </div>
                    <hr>
                    <form action="/admin/review_mce_profile/{{ $profile->mce_profile_id }}" method="POST">
                        @csrf
                        <div class="row mt-5">
                            <div class="col-md-4 mb-4">
                                <label class="form-label">Review</label>
                                <select class="form-select form-select-sm" name="review">
                                    <option value="">Select Review</option>
                                    <option value="Looking Awesome">Looking Awesome</option>
                                    <option value="Fake Profile">Fake Profile</option>
                                </select>
                                <span class="text-danger">
                                    @error('review')
                                        {{ $message }}    
                                    @enderror
                                </span>
                            </div>
                            <div class="col-md-4 mb-4">
                                <label class="form-label">Request</label>
                                <select class="form-select form-select-sm" name="review_status">
                                    <option value="" hidden>Select Review Status</option>
                                    <option value="Approved">Approved</option>
                                    <option value="Rejected">Rejected</option>
                                </select>
                                <span class="text-danger">
                                    @error('review_status')
                                        {{ $message }}    
                                    @enderror
                                </span>
                            </div>
                            <div class="col-md-4 pt-4">
                                <div class="review">
                                    <button type="submit" class="btn btn-dark btn-sm">Submit</button>
                                </div>    
                            </div>
                        </div>  
                    </form>
                </div>
            </div>
            @endforeach            
		</div>
	</div>

@endsection