@extends('layouts.app')
@section('content')
  <!-------------banner section--------------->
  <section id="educator-banner">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="welcome-title">
            <h3>Welcome to Meghware Community Educated</h3>
            <ul class="list-inline fs-12 figure-list">
              <li class="list-inline-item pr-15">
                <i class="fa fa-user mr-10 fs-14 green"></i> Teacher: 
              </li>
              <li class="list-inline-item pr-15">
                <i class="fa fa-graduation-cap mr-10 fs-14 green"></i>   
              </li>
            </ul>
          </div>
        </div>  
      </div>       
    </div>
  </section>  

  <!-------------Search section--------------->    
  <section id="search-menu">
    <div class="container">
      <div class="filter-box">
        <form action="/serach_profiles" method="get" class="needs-validation" novalidate>
          @csrf
          <div class="row mb-5">
            <div class="col-md-12">
              <h4 class="text-center">Search Educator</h4>
            </div>
          </div>
          <div class="row justify-content-center">
              <div class="col-md-4 col-sm-4 mt-2 text-center">
                <div class="form-group">
                  <select class="form-select" name="designation_id" id="validationCustom01" required style="border: 3px solid #ededed;">
                    <option value="">---Select Desination---</option>
                    @foreach ($designations as $designation)
                      <option value="{{ $designation->designation_id }}">{{ $designation->designation_title }}</option>
                    @endforeach
                  </select>
                  <div class="invalid-feedback">
                    Please Select Designation.
                </div>
                </div>     
              </div>
              <div class="col-md-4 col-sm-4 mt-2 text-center">
                <div class="form-group">
                  <select class="form-select" name="city_id" id="validationCustom02" required style="border: 3px solid #ededed;">
                    <option value="">----Select City----</option>
                    @foreach ($cities as $city)
                      <option value="{{ $city->city_id }}">{{ $city->city_title }}</option>
                    @endforeach
                  </select>  
                  <div class="invalid-feedback">
                    Please Select City.
                </div>
                </div>    
              </div>
              <div class="col-md-2 col-sm-2 mt-2">
                <div class="d-grid gap-2 search-btn">
                  <button type="submit" class="btn btn-primary">Search</button>
                </div>   
              </div>
          </div> 
        </form>
      </div>
    </div> 
  </section>

  <!-------------MCE profile results---------------> 
  <section id="educator-cards">
    <div class="container">
      <div class="card-grid">
        <div class="row">
        
  
          @if (isset($profile_records))
          
            @foreach ($profile_records as $profile_record)
            <div class="col-md-3 col-sm-6">
              <div class="card card-primary card-outine">
                <div class="card-body">
                  <div class="text-center">
                    <img src="{{ asset('storage/'.$profile_record->mce_profile_image) }}" style="width: 100px; height: 100px;" class="profile-user-img img-fluid img-circle">
                  </div>
                  <h6 class="profile-username text-center">{{ $profile_record->full_name }}</h6>
                  <center><span class="badge rounded-pill">{{ $profile_record->designation_title }}</span></center>
                  <hr>
                  <i class="fa fa-envelope"></i> {{ $profile_record->email }}<span class="email-content"></span><br>
                  <a href="{{ route('view_mce_profile',['id'=>$profile_record->mce_profile_id]) }}" class="btn btn-primary btn-sm" target="_black">View More</a>
                </div>
              </div>
            </div>
            @endforeach    
            @endif
            
          
        </div>   
      </div>
    </div>
  </section>

  @endsection