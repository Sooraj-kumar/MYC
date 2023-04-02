@extends('layouts.app')
@section('content')
  <section id="banner">
    <div class="container">
      <div class="row p-5">
        <div class="col-md-6 col-sm-6">
          <p class="promo-title">Meghwar Youth Council</p> 
          <p class="about-myc">Meghwar Youth Council is platform of Young Meghwars to Promote & Execute their Strengths for Community Development. Meghwar Youth Council is working for the development of Meghwar community since 2012.</p>
          <p>Learn | Grow | Success </p> 
          <a href="contact.php" class="btn btn-primary signup-btn">Contact Us</a>
        </div>
        <div class="col-md-6 col-sm-6 text-center">
          <img src="image/banner-img.svg" class="img-fluid banner mt-5" style="width: 70%">
        </div>
      </div>
    </div>
    <img src="image/banner.png" class="bottom-img"> 
  </section>

  <section id="mission">
    <div class="container">
      <center>
        <img src="image/divider.png" class="img-fluid">
      </center>
      <div class="row p-5 mb-5">
        <h2 class="mb-5 text-center">Our Mission</h2>
        <div class="col-md-6 col-sm-6 text-center">
          <img src="image/goal.svg" class="img-fluid" style="width: 70%;">
        </div>
        <div class="col-sm-6 col-sm-6">
          <p class="mt-5">The mission of MYC is to provide the awarness about fundamental education without discrimination. Healthcare service delivery should be of highest quality and provided free of cost, with respect and dignity.</p>
        </div>
      </div>
    </div>  
  </section>

  <section id="mce">
    <div class="container">
      <center>
        <img src="image/divider.png" class="img-fluid">
      </center>
      <div class="row p-5 mb-5">
        <h2 class="mb-4 text-center">What is MCE Profile?</h2>
        <div class="col-sm-6 col-sm-6">
          <p class="mt-5">The mission of MYC is to provide the awarness about fundamental education without discrimination. Healthcare service delivery should be of highest quality and provided free of cost, with respect and dignity.</p>
          <a href="register.php" class="btn btn-primary signup-btn">Apply For Profile</a>
        </div>
        <div class="col-md-6 col-sm-6 text-center">
          <img src="image/mce.svg" class="img-fluid" style="width: 70%;">
        </div>
      </div>
    </div>  
  </section>

  <section id="team-members">
    <div class="container">
      <center>
        <img src="image/divider.png" class="img-fluid">
      </center>
      <div class="row p-5 mb-5">
        <h2 class="mb-5 text-center">Team Members</h2>
        <div class="col-md-4 col-sm-4">
          <div class="card card-primary card-outine shadow p-3 mb-5 bg-white rounded">
            <div class="card-body">
              <div class="text-center">
                <img src="image/naresh.jpg" style="width: 50%; height: 50%;" class="profile-user-img img-fluid img-circle">
              </div>
              <h6 class="profile-username text-center">Naresh Kumar Solanki</h6>
              <center>
                <span class="badge rounded-pill">Founder</span></center>
                <hr>
                <i class="fa fa-envelope"></i> <span class="email-content">naresh@gmail.com</span><br>
                <i class="fa fa-phone"></i> <span>+92303434</span><br>
                <i class="fa fa-map-marker"></i> <span>Dad Road Daharki</span>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="card card-primary card-outine shadow p-3 mb-5 bg-white rounded">
            <div class="card-body">
              <div class="text-center">
                <img src="image/om.jpg" style="width: 50%; height: 50%;" class="profile-user-img img-fluid img-circle">
              </div>
              <h6 class="profile-username text-center">Om Parkash Patiya</h6>
              <center>
                <span class="badge rounded-pill">Founder</span></center>
                <hr>
                <i class="fa fa-envelope"></i> <span class="email-content">om@gmail.com</span><br>
                <i class="fa fa-phone"></i> <span>+92303434</span><br>
                <i class="fa fa-map-marker"></i> <span>Dad Road Daharki</span>
            </div>
          </div>
        </div>
        
        <div class="col-md-4 col-sm-4 ">
          <div class="card card-primary card-outine shadow p-3 mb-5 bg-white rounded">
            <div class="card-body">
              <div class="text-center">
                <img src="image/jawahir.jpg" style="width: 50%; height: 50%;" class="profile-user-img img-fluid img-circle">
              </div>
              <h6 class="profile-username text-center">Jawahir Lal Korica</h6>
              <center>
                <span class="badge rounded-pill">Founder</span></center>
                <hr>
                <i class="fa fa-envelope"></i> <span class="email-content">jawahir@gmail.com</span><br>
                <i class="fa fa-phone"></i> <span>+92303434</span><br>
                <i class="fa fa-map-marker"></i> <span>Dad Road Daharki</span>
            </div>
          </div>
        </div>
      </div>
    </div>  
  </section>
@endsection