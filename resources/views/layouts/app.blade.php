<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SI INNA</title>

    {{-- Jquery --}}
    <script src="{{ asset('FINDASH/js/jquery.min.js') }}"></script>

    {{-- Data Table --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

    <!-- FontAwesome JS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('images/LOGO.png') }}" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('FINDASH/css/bootstrap.min.css') }}">
    <!-- Typography CSS -->
    <link rel="stylesheet" href="{{ asset('FINDASH/css/typography.css') }}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('FINDASH/css/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('FINDASH/css/responsive.css') }}">
    <!-- Full calendar -->
    <link href='{{ asset('FINDASH/fullcalendar/core/main.css') }}' rel='stylesheet' />
    <link href='{{ asset('FINDASH/fullcalendar/daygrid/main.css') }}' rel='stylesheet' />
    <link href='{{ asset('FINDASH/fullcalendar/timegrid/main.css') }}' rel='stylesheet' />
    <link href='{{ asset('FINDASH/fullcalendar/list/main.css') }}' rel='stylesheet' />

    <link rel="stylesheet" href="{{ asset('FINDASH/css/flatpickr.min.css') }}">

    @yield('css_after')
</head>

<body>
    <!-- loader Start -->
    <div id="loading">
        <div id="loading-center">
        </div>
    </div>
    <!-- loader END -->

    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Sidebar  -->
        @include('layouts.sidebar')
        <!-- TOP Nav Bar -->
        <div class="iq-top-navbar">
            <div class="iq-navbar-custom">
                <nav class="navbar navbar-expand-lg navbar-light p-0">
                    <div class="iq-menu-bt d-flex align-items-center">
                        <div class="wrapper-menu">
                            <div class="main-circle"><i class="ri-menu-line"></i></div>
                            <div class="hover-circle"><i class="ri-close-fill"></i></div>
                        </div>
                        <div class="iq-navbar-logo d-flex justify-content-between ml-3">
                            <a href="index.html" class="header-logo">
                                <img src="{{ asset('images/LOGO.png') }}" class="img-fluid rounded" alt="">
                                <span>SI INNA</span>
                            </a>
                        </div>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    </div>
                    <ul class="navbar-list">
                        <li class="line-height">
                            <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
                                <img src="{{ asset('assets/images/' . Auth::user()->photo) }}"
                                    class="img-fluid rounded mr-3" alt="{{ Auth::user()->name }}">
                                <div class="caption">
                                    <h6 class="mb-0 line-height">{{ Auth::user()->name }}</h6>
                                </div>
                            </a>
                            <div class="iq-sub-dropdown iq-user-dropdown">
                                <div class="iq-card shadow-none m-0">
                                    <div class="iq-card-body p-0 ">
                                        <div class="bg-primary p-3">
                                            <h5 class="mb-0 text-white line-height">{{ Auth::user()->name }}</h5>
                                        </div>
                                        <a href="profile.html" class="iq-sub-card iq-bg-primary-hover">
                                            <div class="media align-items-center">
                                                <div class="rounded iq-card-icon iq-bg-primary">
                                                    <i class="ri-file-user-line"></i>
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">Profil Saya</h6>
                                                    <p class="mb-0 font-size-12">Detail Profil.</p>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="d-inline-block w-100 text-center p-3">
                                            <a class="bg-primary iq-sign-btn" href="{{ route('logout') }}"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sign
                                                out<i class="ri-login-box-line ml-2"></i></a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- TOP Nav Bar END -->

        <!-- Page Content  -->
        <div id="content-page" class="content-page">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
    </div>
    <!-- Wrapper END -->
    <!-- Footer -->
    <footer class="iq-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="privacy-policy.html">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="terms-of-service.html">Terms of Use</a></li>
                    </ul>
                </div>
                <div class="col-lg-6 text-right">
                    Copyright 2020 <a href="#">DPUBMTR</a> All Rights Reserved.
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer END -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="{{ asset('FINDASH/js/popper.min.js') }}"></script>
    <script src="{{ asset('FINDASH/js/bootstrap.min.js') }}"></script>
    <!-- Appear JavaScript -->
    <script src="{{ asset('FINDASH/js/jquery.appear.js') }}"></script>
    <!-- Countdown JavaScript -->
    <script src="{{ asset('FINDASH/js/countdown.min.js') }}"></script>
    <!-- Counterup JavaScript -->
    <script src="{{ asset('FINDASH/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('FINDASH/js/jquery.counterup.min.js') }}"></script>
    <!-- Wow JavaScript -->
    <script src="{{ asset('FINDASH/js/wow.min.js') }}"></script>
    <!-- Apexcharts JavaScript -->
    <script src="{{ asset('FINDASH/js/apexcharts.js') }}"></script>
    <!-- Slick JavaScript -->
    <script src="{{ asset('FINDASH/js/slick.min.js') }}"></script>
    <!-- Select2 JavaScript -->
    <script src="{{ asset('FINDASH/js/select2.min.js') }}"></script>
    <!-- Owl Carousel JavaScript -->
    <script src="{{ asset('FINDASH/js/owl.carousel.min.js') }}"></script>
    <!-- Magnific Popup JavaScript -->
    <script src="{{ asset('FINDASH/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Smooth Scrollbar JavaScript -->
    <script src="{{ asset('FINDASH/js/smooth-scrollbar.js') }}"></script>
    <!-- lottie JavaScript -->
    <script src="{{ asset('FINDASH/js/lottie.js') }}"></script>
    <!-- am core JavaScript -->
    <script src="{{ asset('FINDASH/js/core.js') }}"></script>
    <!-- am charts JavaScript -->
    <script src="{{ asset('FINDASH/js/charts.js') }}"></script>
    <!-- am animated JavaScript -->
    <script src="{{ asset('FINDASH/js/animated.js') }}"></script>
    <!-- am kelly JavaScript -->
    <script src="{{ asset('FINDASH/js/kelly.js') }}"></script>
    <!-- am maps JavaScript -->
    <script src="{{ asset('FINDASH/js/maps.js') }}"></script>
    <!-- am worldLow JavaScript -->
    <script src="{{ asset('FINDASH/js/worldLow.js') }}"></script>
    <!-- Raphael-min JavaScript -->
    <script src="{{ asset('FINDASH/js/raphael-min.js') }}"></script>
    <!-- Morris JavaScript -->
    <script src="{{ asset('FINDASH/js/morris.js') }}"></script>
    <!-- Morris min JavaScript -->
    <script src="{{ asset('FINDASH/js/morris.min.js') }}"></script>
    <!-- Flatpicker Js -->
    <script src="{{ asset('FINDASH/js/flatpickr.js') }}"></script>
    <!-- Style Customizer -->
    <script src="{{ asset('FINDASH/js/style-customizer.js') }}"></script>
    <!-- Chart Custom JavaScript -->
    <script src="{{ asset('FINDASH/js/chart-custom.js') }}"></script>
    <!-- Custom JavaScript -->
    <script src="{{ asset('FINDASH/js/custom.js') }}"></script>

    @yield('js_after')

    @include('sweetalert::alert')
</body>

</html>
