@extends('admin.layouts.app')
@section('content')

	<div class="row">
	   <div class="col-sm-12">
	       <div class="row">
                <div class="col-md-6 col-sm-6 text-center">
                    <div class="event-banner">
                        <img src="/image/event.svg" class="img-fluid" style="width: 60%; margin-top: 35%;">  
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="form-wrap">
                        <div class="form-title mb-3">
                            <h4 class="text-center">Add New Event</h4>
                        </div>
                        <form action="/admin/add_event" method="POST" enctype="multipart/form-data" class="mt-5 needs-validation" novalidate>
                            @csrf
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
                            <div class="mb-3">
                                <label class="form-label">Event Title</label>
                                <input type="text" autofocus name="event_title" class="form-control form-control-sm" value="{{ old('event_title') }}" id="validationCustom01" required>
                                <span class="text-danger">
                                    @error('event_title')
                                        {{ $message }}    
                                    @enderror
                                </span>
                                <div class="invalid-feedback">
                                    Please Input Event Title.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Upload Image</label>
                                <div class="custom-file">
                                    <input type="file" name="feature_image" class="form-control form-control-sm" accept=".jpg,.png,.jpeg" value="{{ old('feature_image') }}" id="validationCustom02" required>
                                    <span class="text-danger">
                                        @error('feature_image')
                                            {{ $message }}    
                                        @enderror
                                    </span>
                                    <div class="invalid-feedback">
                                        Please Upload Event Image.
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <label class="form-label">Date</label>
                                    <input type="date" name="event_date" class="form-control form-control-sm" value="{{ old('event_date') }}" id="validationCustom03" required>  
                                    <span class="text-danger">
                                        @error('event_date')
                                            {{ $message }}    
                                        @enderror
                                    </span>
                                    <div class="invalid-feedback">
                                        Please Input Event Date.
                                    </div>
                                </div>
                                <div class="col">
                                    <label class="form-label">Time</label>
                                    <input type="time" name="event_time" class="form-control form-control-sm" value="{{ old('event_time') }}" id="validationCustom04" required>
                                    <span class="text-danger">
                                        @error('event_time')
                                            {{ $message }}    
                                        @enderror
                                        <div class="invalid-feedback">
                                            Please Input Event Time.
                                        </div>
                                    </span>
                                </div>  
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Address</label>
                                <input type="text" name="event_address" class="form-control form-control-sm" value="{{ old('event_address') }}" id="validationCustom05" required>
                                <span class="text-danger">
                                    @error('event_address')
                                        {{ $message }}    
                                    @enderror
                                </span>
                                <div class="invalid-feedback">
                                    Please Input Event Address.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Event Detail</label>
                                <textarea name="description" class="form-control" value="{{ old('event_detail') }}" id="validationCustom06" required></textarea>
                                <span class="text-danger">
                                    @error('event_detail')
                                        {{ $message }}    
                                    @enderror
                                </span>
                                <div class="invalid-feedback">
                                    Please Input Event Detail.
                                </div>
                            </div>
                            <div class="mb-3">
                                <button type="reset" class="btn btn-outline-dark btn-sm">Reset</button>
                                <button type="submit" class="btn btn-dark btn-sm">Add</button>
                            </div>  
                        </form>
                    </div>  
                </div>
            </div>     		
		</div>
	</div>

@endsection