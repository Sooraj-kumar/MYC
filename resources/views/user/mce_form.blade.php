@extends('user.layouts.app')
@section('content')
    
	
    <div class="row">
		<div class="col-sm-12">
            <h3>Appyly For MCE Profile</h3>
            <form action="/user/submit_mce_profile" method="POST" enctype="multipart/form-data" class="mce_profile mt-5 needs-validation" novalidate>
                @csrf
                <!---- Persoanl Detail ----->
                <div class="main-title mb-3">
                    <h5>Personal Detail</h5>
                </div> 
                <div class="row mb-3">
                    <div class="col-md-6 col-sm-6">
                        <label class="form-label">Full Name <span class="text-danger">*</span></label>
                        <input type="text" name="full_name" class="form-control" id="validationCustom01" required autofocus value="{{ old('full_name') }}">
                        <div class="invalid-feedback">
                            Please Input Full Name.
                        </div>
                    </div>  
                    <div class="col-md-6 col-sm-6">
                        <label class="form-label">Designation <span class="text-danger">*</span></label>
                        <select class="form-select" name="designation_id" id="validationCustom02" required>
                            <option hidden="" value="">Select Designation</span></option>
                            @foreach ($designations as $designation)
                                <option value="{{ $designation->designation_id }}">{{ $designation->designation_title }}</option>    
                            @endforeach
                        </select>
                        <div class="invalid-feedback">
                            Please Select Designation.
                        </div>
                    </div>
                </div> 
                <div class="row mb-3">
                    <div class="col-md-6 col-sm-6">
                        <label class="form-label">Home Town <span class="text-danger">*</span></label>
                        <select class="form-select" name="city_id" id="validationCustom03" required>
                            <option hidden="" value="">Select City <span class="text-danger">*</span></option>
                            @foreach ($cities as $city)
                                <option value="{{ $city->city_id }}">{{ $city->city_title }}</option>    
                            @endforeach
                        </select>
                        <div class="invalid-feedback">
                            Please Select City.
                        </div>
                    </div>        
                    <div class="col-md-6 col-sm-6">
                        <label class="form-label">Upload Image <span class="text-danger">*</span></label>
                        <div class="custom-file">
                            <input type="file" class="form-control" name="mce_profile_image" id="validationCustom04" required>
                            <div class="invalid-feedback">
                                Please Choose Image.
                            </div>
                        </div>  
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-12 col-sm-12">
                        <label class="form-label">About Me <span class="text-danger">*</span></label>
                        <textarea name="about_me" class="form-control" rows="5" id="validationCustom05" required value="{{ old('about_me') }}"></textarea>
                        <div class="invalid-feedback">
                            Please Write something about yourself.
                        </div>
                    </div>
                </div>
                    
                <!---------------- Contact fields ---------------->
                <div class="main-title mb-3">
                    <h5>Contact Detail</h5>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6 col-sm-6">
                        <label class="form-label">Email <span class="text-danger">*</span></label>
                        <input type="email" name="email" class="form-control" placeholder="example@gmail.com" id="validationCustom06" required value="{{ old('email') }}">
                        <div class="invalid-feedback">
                            Please Input Email.
                        </div>
                    </div>  
                    <div class="col-md-6 col-sm-6">
                        <label class="form-label">Mobile no. <span class="text-danger">*</span></label>
                        <input type="number" name="mobile" class="form-control" placeholder="03001211111" id="validationCustom07" required value="{{ old('mobile') }}">
                        <div class="invalid-feedback">
                            Please Input Mobile no.
                        </div>
                    </div>
                </div> 
                <div class="row mb-3">
                    <div class="col-md-12 col-sm-12">
                        <label class="form-label">Postal Address <span class="text-danger">*</span></label>
                        <input type="text" name="address" class="form-control" id="validationCustom08" required value="{{ old('address') }}">
                        <div class="invalid-feedback">
                            Please Input Address.
                        </div>
                    </div>
                </div>  
                
                <!---------------- Currrent Status fields ---------------->
                <div class="main-title mb-3">
                    <h5>Current Status</h5>
                </div> 
                <div class="row mb-3">
                    <div class="col-md-6 col-sm-6">
                        <label class="form-label">Department/Company/Institute <span class="text-danger">*</span></label>
                        <input type="text" name="department" class="form-control" placeholder="example. Health Department" id="validationCustom9" required value="{{ old('department') }}">
                        <div class="invalid-feedback">
                            Please Inpur Department or Company Name.
                        </div>
                    </div>  
                    <div class="col-md-6 col-sm-6">
                        <label class="form-label">From (Year) <span class="text-danger">*</span></label>
                        <input type="number" name="from_year" class="form-control" placeholder="example. 2012" id="validationCustom10" required value="{{ old('form_year') }}">
                        <div class="invalid-feedback">
                            Please Input From (Year).
                        </div>
                    </div>
                </div> 
                <div class="row mb-3">
                    <div class="col-md-12 col-sm-12">
                        <label class="form-label">Location <span class="text-danger">*</span></label>
                        <input type="text" name="location" class="form-control" id="validationCustom11" required value="{{ old('location') }}">
                        <div class="invalid-feedback">
                            Please Input Location.
                        </div>
                    </div>
                </div>  
                
                <!---------------- Qualification fields ---------------->
                <div class="main-title mb-3">
                    <h5>Qualification</h5>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6 col-sm-6">
                        <label class="form-label">Degree <span class="text-danger">*</span></label>
                        <select class="form-select" name="degree_id" id="validationCustom12" required>
                            <option hidden="" value="">Select Degre Title <span class="text-danger">*</span></option>
                            @foreach ($degrees as $degree)
                                <option value="{{ $degree->degree_id }}">{{ $degree->degree_title }}</option>    
                            @endforeach
                        </select>
                        <div class="invalid-feedback">
                            Please Select Degree Title.
                        </div>
                    </div>  
                    <div class="col-md-6 col-sm-6">
                        <label class="form-label">Major <span class="text-danger">*</span></label>
                        <input type="text" name="major" class="form-control" placeholder="i.e. Computer Science, English, Mathematics" id="validationCustom13" required value="{{ old('major') }}">
                        <div class="invalid-feedback">
                            Please Input Major.
                        </div>
                    </div>
                </div> 
                <div class="row mb-3">
                    <div class="col-md-6 col-sm-6">
                        <label class="form-label">Institute <span class="text-danger">*</span></label>
                        <input type="text" name="institute" class="form-control" placeholder="i.e. Usindh, Sukkur IBA. etc" id="validationCustom14" required value="{{ old('institute') }}">
                        <div class="invalid-feedback">
                            Please Input Institution .
                        </div>
                    </div>  
                    <div class="col-md-6 col-sm-6">
                        <label class="form-label">Completion Year <span class="text-danger">*</span></label>
                        <input type="number" name="completion_year" class="form-control" placeholder="i.e. 2016, 2018. etc" id="validationCustom15" required value="{{ old('completion_year') }}">
                        <div class="invalid-feedback">
                            Please Inpput Completion Year.
                        </div>
                    </div>
                </div>  
                <div class="mb-5 mt-5">
                    <button type="reset" class="btn btn-outline-dark btn-sm">Reset</button>
                    <button type="submit" class="btn btn-dark btn-sm">Submit</button>
                </div> 
            </form>
		</div>
	</div>
@endsection