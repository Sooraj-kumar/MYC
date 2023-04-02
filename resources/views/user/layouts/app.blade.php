<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>MYC - User</title>
    <link rel="icon" href="/image/logo.png" type="/image/png">
    <link rel="stylesheet" href="/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/vendors/themefy_icon/themify-icons.css" />
    <link rel="stylesheet" href="/vendors/select2/css/select2.min.css" />
    <link rel="stylesheet" href="/vendors/font_awesome/css/all.min.css" />
    <link rel="stylesheet" href="/css/dashboard_style.css" />
</head>

<body class="crm_body_bg">
    <!---sidebar--->
    <nav class="sidebar bg-white">
        <div class="logo d-flex justify-content-center text-center">
            <a href="index-2.html"><img src="/image/logo.png" alt=""></a>
            <div class="sidebar_close_icon d-lg-none">
                <i class="ti-close"></i>
            </div>
        </div>
        <ul id="sidebar_menu">
            <li class="mm-active">
                <a href="/user/dashboard" aria-expanded="false">
                    <img src="/image/menu-icon/1.svg" alt="">
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="mm">
                <a href="/user/mce_profile" aria-expanded="false">
                    <img src="/image/menu-icon/2.svg" alt="">
                    <span>MCE Profile</span>
                </a>
            </li>
            <li class="mm">
                <a href="/user/invitation" aria-expanded="false">
                    <img src="/image/menu-icon/2.svg" alt="">
                    <span>Invitation</span>
                </a>
            </li>
            <li class="mm">
                <a href="/user/profile" aria-expanded="false">
                    <img src="/image/menu-icon/2.svg" alt="">
                    <span>Account Profile</span>
                </a>
            </li>
            <li class="mm">
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" aria-expanded="false">
                    <img src="/image/menu-icon/2.svg" alt="">
                    <span>Logout</span>
                </a>
            </li>
        </ul>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
      </form>
    </nav>


    <section class="main_content dashboard_part">
        <div class="container-fluid g-0">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="header_iner d-flex justify-content-end align-items-center">
                        <div class="sidebar_icon d-lg-none">
                            <i class="ti-menu"></i>
                        </div>
                        <div class="header_right d-flex justify-content-end align-items-center">
                            <div class="header_notification_warp d-flex align-items-center">
                                <li>
                                    <a href="#"> <img src="/image/icon/bell.svg" alt=""> </a>
                                </li>
                                <li>
                                    <a href="#"> <img src="/image/icon/msg.svg" alt=""> </a>
                                </li>
                            </div>
                            <div class="profile_info">
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        {{ Auth()->user()->full_name }}
                                    </button>
                                    <ul class="dropdown-menu">
                                      <li><a href="{{ route('logout') }}" class="dropdown-item fs-6" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><b>Logout</b></a></li>
                                    </ul>
                                  </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!---main content---->
        <div class="main_content_iner">
            <div class="container-fluid plr_30 pt_30">
                @yield('content')
            </div>
        </div>

        <!----footer----->
        <div class="footer_part">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <div class="footer_iner text-center">
                            <p>2020 © Influence - Designed by<a href="#"> Dashboard</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="/js/client-side-validation.js"></script>
    <script src="/js/jquery1-3.4.1.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/vendors/niceselect/js/jquery.nice-select.min.js"></script>
    <script src="/js/custom.js"></script>
</body>
</html>