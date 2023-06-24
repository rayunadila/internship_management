<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login Si Inna</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('images/LOGO.png') }}" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('findash/css/bootstrap.min.css') }}">
    <!-- Typography CSS -->
    <link rel="stylesheet" href="{{ asset('findash/css/typography.css') }}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('findash/css/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('findash/css/responsive.css') }}">
</head>

<body>
    <!-- loader Start -->
    <div id="loading">
        <div id="loading-center">
        </div>
    </div>
    <!-- loader END -->
    <!-- Sign in Start -->
    <section class="sign-in-page">
        <div id="container-inside">
            <div class="cube"></div>
            <div class="cube"></div>
            <div class="cube"></div>
            <div class="cube"></div>
            <div class="cube"></div>
        </div>
        <div class="container p-0">
            <div class="row no-gutters height-self-center">
                <div class="col-sm-12 align-self-center bg-primary rounded">
                    <div class="row m-0">
                        <div class="col-md-5 bg-white sign-in-page-data">
                            <div class="sign-in-from">
                                <h1 class="mb-0 text-center">Masuk</h1>
                                <p class="text-center text-dark">Isilah nama lengkap anda dan katasandi yang sesuai.</p>
                                <form action="{{ route('login') }}" method="POST" class="mt-4">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama Lengkap</label>
                                        <input type="text" class="form-control mb-0" id="exampleInputEmail1"
                                            placeholder="Nama Lengkap" name="name" value="{{ old('name') }}">
                                        @error('name')
                                            <span class="text-danger"> {{ $message }}
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Kata Sandi</label>
                                        <input type="password" class="form-control mb-0" id="exampleInputPassword1"
                                            placeholder="Kata Sandi" name="password" value="{{ old('password') }}">
                                        @error('password')
                                            <span class="text-danger"> {{ $massage }} </span>
                                        @enderror
                                    </div>

                                    <div class="sign-info text-center">
                                        <button type="submit" class="btn btn-primary d-block w-100 mb-2">Masuk</button>
                                        <span class="text-dark dark-color d-inline-block line-height-2">Tidak Punya
                                            Akun? <a href="{{ route('register') }}">Daftar Akun</a></span>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-7 text-center sign-in-page-image">
                            <div class="sign-in-detail text-white">
                                <a class="sign-in-logo mb-5" href="#"><img src="{{ asset('images/LOGO.png') }}"
                                        class="img-fluid" alt="logo">
                                </a>

                                <div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="false"
                                    data-dots="true" data-items="1" data-items-laptop="1" data-items-tab="1"
                                    data-items-mobile="1" data-items-mobile-sm="1" data-margin="0">
                                    <div class="item">
                                        <img src="{{ asset('landing_page/assets/images/img-6449.jpeg') }}"
                                            class="img-fluid mb-4" alt="logo">

                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('landing_page/assets/images/img-6445.jpeg') }}"
                                            class="img-fluid mb-4" alt="logo">
                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('landing_page/assets/images/img-6446.jpg') }}"
                                            class="img-fluid mb-4" alt="logo">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Sign in END -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('findash/js/jquery.min.js') }}"></script>
    <script src="{{ asset('findash/js/popper.min.js') }}"></script>
    <script src="{{ asset('findash/js/bootstrap.min.js') }}"></script>
    <!-- Appear JavaScript -->
    <script src="{{ asset('findash/js/jquery.appear.js') }}"></script>
    <!-- Countdown JavaScript -->
    <script src="{{ asset('findash/js/countdown.min.js') }}"></script>
    <!-- Counterup JavaScript -->
    <script src="{{ asset('findash/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('findash/js/jquery.counterup.min.js') }}"></script>
    <!-- Wow JavaScript -->
    <script src="{{ asset('findash/js/wow.min.js') }}"></script>
    <!-- Apexcharts JavaScript -->
    <script src="{{ asset('findash/js/apexcharts.js') }}"></script>
    <!-- lottie JavaScript -->
    <script src="{{ asset('findash/js/lottie.js') }}"></script>
    <!-- Slick JavaScript -->
    <script src="{{ asset('findash/js/slick.min.js') }}"></script>
    <!-- Select2 JavaScript -->
    <script src="{{ asset('findash/js/select2.min.js') }}"></script>
    <!-- Owl Carousel JavaScript -->
    <script src="{{ asset('findash/js/owl.carousel.min.js') }}"></script>
    <!-- Magnific Popup JavaScript -->
    <script src="{{ asset('findash/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Smooth Scrollbar JavaScript -->
    <script src="{{ asset('findash/js/smooth-scrollbar.js') }}"></script>
    <!-- Style Customizer -->
    <script src="{{ asset('findash/js/style-customizer.js') }}"></script>
    <!-- Chart Custom JavaScript -->
    <script src="{{ asset('findash/js/chart-custom.js') }}"></script>
    <!-- Custom JavaScript -->
    <script src="{{ asset('findash/js/custom.js') }}"></script>
</body>

</html>
