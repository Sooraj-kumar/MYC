@extends('admin.layouts.app')
@section('content')

	<div class="row">
		<div class="col-sm-12">
			<div class="main-title">
        <h2 class="mb-4">Edit Job</h2>
      </div>
      <div class="container">
        @if(session()->has('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session()->get('success')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @elseif (session()->has('error'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{session()->get('error')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
        <form method="POST" action="{{ route('admin.update_job',['id'=>$job->id]) }}" class="mt-5 needs-validation" novalidate enctype="multipart/form-data">
          @csrf  
          <div class="row mb-3">
            <div class="col-sm-12">
              <label class="form-label">Job Title <span class="text-danger">*</span></label>
              <input type="text" class="form-control" value="{{ $job->job_title }}" name="job_title" id="validationCustom01" required placeholder="eg. PST Teacher">
              <div class="invalid-feedback">
                Please Input Job Title.
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-sm-12">
              <label class="col-sm-3 col-form-label">Required Skills</label>
              <textarea id="editor" name="required_skills" class="form-control ckeditor">{{ $job->required_skills }}</textarea>  
            </div> 
          </div>
          <div class="row mb-3">
            <div class="col-sm-6">
              <label class="form-label">Department/Company/Project <span class="text-danger">*</span></label>
              <input type="text" class="form-control" value="{{ $job->department}}" name="department" id="validationCustom02" required placeholder="eg. Health, Education, IT">
                <div class="invalid-feedback">
                  Please Input Department/Company/Project Name.
                </div>
            </div>
            <div class="col-sm-6">
              <label class="form-label">Job Category <span class="text-danger">*</span></label>
                <select class="form-select" aria-label="Default select example" name="job_category" id="validationCustom03" required>
                  <option value="">---Select Job Category</option>
                  <option value="Government" {{ $job->job_category=="Government" ? 'selected' : '' }}>Governement</option>
                  <option value="Private" {{ $job->job_category=="Private" ? 'selected' : '' }}>Private</option>
                </select>
                <div class="invalid-feedback">
                  Please Select Job Category.
                </div>
            </div>    
          </div>
          <div class="row mb-3">
            <div class="col-sm-6">
              <label class="form-label">Qualifications <span class="text-danger">*</span></label>
              <input type="text" class="form-control" value="{{ $job->qualification }}" name="qualification" id="validationCustom04" required placeholder="eg. Bachelor of Science">
              <div class="invalid-feedback">
                Please Input Job Qualification.
              </div>
            </div>
            <div class="col-sm-6">
              <label class="form-label">Experience</label>
              <input type="text" class="form-control" value="{{ $job->experience }}" name="experience" placeholder="eg. 2 Years">
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-sm-6">
              <label class="form-label">Location</label>
              <input type="text" value="{{ $job->location }}" class="form-control" name="location">
            </div>
            <div class="col-sm-6">
              <label class="form-label">Age Limit <span class="text-danger">*</span></label>
              <input type="text" class="form-control" value="{{ $job->age_limit }}" name="age_limit" id="validationCustom05" required placeholder="eg. 18-35">
              <div class="invalid-feedback">
                Please Input Age Limit.
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-sm-6">
              <label class="form-label">Vacancies</label>
              <input type="number" class="form-control" value="{{ $job->vacancies }}" name="vacancies" placeholder="No. of Vacancies">
            </div>
            <div class="col-sm-6">
              <label class="form-label">Posted On <span class="text-danger">*</span></label>
              <input type="date" class="form-control" name="posted_on" value="{{ $job->posted_on }}" id="validationCustom06" required>
              <div class="invalid-feedback">
                Please Input Job Posted Date.
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-sm-6">
              <label class="form-label">Last Date to Apply <span class="text-danger">*</span></label>
              <input type="date" class="form-control" value="{{ $job->last_date }}" name="last_date" id="validationCustom07" required>
              <div class="invalid-feedback">
                Please Input Job Last Date to Apply.
              </div>
            </div>
            <div class="col-sm-6">
              <label class="form-label">Upload Original Advertisment</label>
              <input type="file" class="form-control" name="advertisement">
            </div>
          </div>
          <div class="mb-5 float-end">
            <button type="submit" class="btn btn-dark btn-sm">Update</button>
          </div>
        </form>
      </div> 
		</div>
	</div>

@endsection