@extends('layouts.app')
@section('content')
<!-------------------Breadcrum-------------------->
<section id="profile-detail">
  <div class="breadcrumb-section">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item"><a href="educator.php">Search Educator</a></li>
          <li class="breadcrumb-item active" aria-current="page">{{ $profile_record->full_name }}</li>
        </ol>
      </nav>  
    </div>  
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-3 text-center">
        <div class="profile-img">
          <img src="{{ asset('storage/'.$profile_record->mce_profile_image) }}" class="profile-detail-img img-fluid img-circle" style="width: 150px; height: 150px;">
        </div>
        <i class="fa fa-map-marker"></i><span class="email-content"> {{ $profile_record->city_title }}<i></i></span><br>
      </div>
      <div class="col-md-9 col-sm-9">
        <div class="personal-detail">
          <h4><b>{{ $profile_record->full_name }}</b></h4>  
          <span class="badge rounded-pill">{{ $profile_record->designation_title }}</span>
          <hr>
          <b>Contact</b><br> 
          <i class="fa fa-envelope"></i><span class="email-content"> {{ $profile_record->email }}<i></i></span><br>  
          <i class="fa fa-phone"></i><span class="email-content"> {{ $profile_record->mobile }}<i></i></span><br>
          <i class="fa fa-map-marker"></i><span class="email-content"> {{ $profile_record->address }}</i></span><br><hr> 
        </div>  
        <div class="about-detail">
          <b>About</b>
          <p>{{ $profile_record->about_me }}</p>  
        </div><hr>
          <div class="job-detail">
            <b>Current Status</b>
            <table id="dt-vertical-scroll" class="table table-striped table-hover table-sm table-borderless table-responsive-md" data-info="false" >
              <thead>
                <tr>
                  <th class="th-sm">Department/ Company/ Institute</th>
                  <th class="th-sm">From (Year)</th>
                  <th class="th-sm">Location</th>
                </tr>
              </thead>  
              <tbody>
                <tr>
                  <td>{{ $profile_record->department }}</td>
                  <td>{{ $profile_record->from_year }}</td>
                  <td>{{ $profile_record->location }}</td>
                </tr>
              </tbody>
            </table>  
          </div> 
          <div class="qualification-table">
            <b>Qualification</b>
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
                  <td>{{ $profile_record->degree_title }}</td>
                  <td>{{ $profile_record->major }}</td>
                  <td>{{ $profile_record->institute }}</td>
                  <td>{{ $profile_record->completion_year }}</td>
                </tr>
              </tbody>
            </table>  
          </div>
        </div>
    </div>  
  </div>  
</section>

@endsection
