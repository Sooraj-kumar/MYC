<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="/image/logo.png" type="/image/png">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>MYC</title>
  <!----------Bootstrap---------------->
  <link rel="stylesheet" type="text/css" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
  <!----------CSS Style---------------->
  <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
  <!-- Font Awesome -->
  <link href="{{asset('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <!----------Google Fonts---------------->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    
  <!-------------navigation section--------------->
  <section id="header">
    <nav class="navbar navbar-expand-md navbar-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
          <img src="{{ asset('image/logo.png') }}">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="{{url('/')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{'/about'}}">About us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{'/mce_profile'}}">MCE Profiles</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                News
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{'/jobs'}}">Jobs</a></li>
                <li><a class="dropdown-item" href="{{'/events'}}">Events</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{'/contact'}}">Contact</a>
            </li>
            @if (Auth()->user())
              <li class="nav-item register">
                @if (Auth()->user()->role=="Admin")
                  <a class="nav-link" href="/admin/dashboard" style="color: #fff; ">Dashboard</a>
                @else
                  <a class="nav-link" href="/user/dashboard" style="color: #fff; ">Dashboard</a>
                @endif
              </li>  
              <li class="nav-item login">
                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" aria-expanded="false" style="color: #000">Logout</a>
              </li>
              @else
              <li class="nav-item register">
                <a class="nav-link" href="{{ route('register') }}" style="color: #fff; ">Register</a>
              </li>
              <li class="nav-item login">
                <a class="nav-link" href="{{ route('login') }}" style="color: #000; ">Login</a>
              </li>
            @endif
          </ul>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>
        </div>
      </div>
    </nav>
  </section>

  <!--main content-->
  @yield('content')
  <!--end main content-->

  <!-------------------Footer-------------------->
  <section id="footer">
    <div class="main-footer">
      <div class="container-fluid">
        <div class="row p-5">
          <div class="col-md-4">
            <img src="{{ asset('image/logo.png') }}" class="img-fluid" style="width: 50%; margin-top: 40px;">
          </div>
          <div class="col-md-4 pt-3">
            <h4>Contact us</h4>
            <i class="fa fa-envelope"></i> <span>mycinfo@gmail.com</span><br>
            <i class="fa fa-phone"></i> <span>+923075207674</span><br>
            <i class="fa fa-map-marker"></i> <span>Dad Road Daharki</span><br>
          </div>
          <div class="col-md-4 pt-3">
            <h4>Follow us</h4>
            <div class="footer-icons">
              <a href="https://www.facebook.com/meghwaryouthcouncil"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-whatsapp"></i></a>
              <a href="https://twitter.com/youthmeghwar"><i class="fa fa-twitter"></i></a>
              <a href="https://www.youtube.com/channel/UCF1nKhCtRfWe81WzN7gmdFA"><i class="fa fa-youtube-play"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div> 
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 text-center">
            <p>&copy 2022 All Rights Reserved. Design & Developed By Sooraj kumar</p>
          </div>
        </div>
      </div>
    </div>      
  </section>

  <!-------------bootstrap javascript--------------->
  <script type="text/javascript" src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <!---------Bootsrap client-side validation------------>
  <script type="text/javascript" src="{{asset('js/client-side-validation.js')}}"></script>
    
</body>
</html>
