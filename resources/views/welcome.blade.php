<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>SI INNA</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ asset('landing_pages/assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('landing_pages/assets/css/font-awesome.css') }}">

    <link rel="stylesheet" href="{{ asset('landing_pages/assets/css/templatemo-lava.css') }}">

    <link rel="stylesheet" href="{{ asset('landing_pages/assets/css/owl-carousel.css') }}">

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <div class="iq-navbar-logo d-flex justify-content-between ml-3">
                                <a href="" class="header-logo">
                                    <img src="{{ asset('images/LOGO.png') }}"
                                        style="margin: 0 50px 0 10px; width:50px;height:50px;" class="img-fluid rounded"
                                        alt="">
                                </a>
                            </div>
                            <li class="scroll-to-section"><a href="#welcome" class="menu-item">Beranda</a></li>
                            <li class="scroll-to-section"><a href="#about" class="menu-item">Tentang Kami</a></li>
                            <li>
                            </li>
                            <li class="submenu">
                                <a href="javascript:;">Panduan</a>
                                <ul>
                                    <li><a href="" class="menu-item">Panduan Pengajuan PKL</a></li>
                                    <li><a href="" class="menu-item">Panduan Peserta PKL</a></li>
                                </ul>
                            </li>

                            <li class="scroll-to-section"><a href="#" class="menu-item">Buat Pengajuan</a>
                            </li>
                            <div class="text-end mt-1">
                                <a href="{{ route('login') }}" class="btn btn-warning">Login</a>
                            </div>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>

                        <!-- ***** Menu End ***** -->
                    </nav>
                    <div class="col-md-8 col-md-offset-2">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>

			<!-- deklarasi carousel -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="{{ asset('images/DPUBMTR.png') }}" alt="www.malasngoding.com">
					<div class="carousel-caption">
						<h3>www.malasngoding.com</h3>
						<p>Tutorial belajar pemrograman web, mobile dan design.</p>
					</div>
				</div>
				<div class="item">
					<img src="img/malasngoding2.png" alt="www.malasngoding.com">
					<div class="carousel-caption">
						<h3>Tutorial Bootstrap</h3>
						<p>Belajar tutorial bootstrap dasar di www.malasngoding.com</p>
					</div>
				</div>
				<div class="item">
					<img src="{{ asset('images/DPUBMTR.png') }}" alt="www.malasngoding.com">
					<div class="carousel-caption">
						<h3>Tutorial Android</h3>
						<p>Tutorial membuat aplikasi android.</p>
					</div>
				</div>
			</div>

			<!-- membuat panah next dan previous -->
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
                </div>
            </div>
        </div>

    </header>
    <!-- ***** Header Area End ***** -->


    <!-- ***** Welcome Area Start ***** -->
    <div class="welcome-area" id="welcome">

        <!-- ***** Header Text Start ***** -->
        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class="left-text col-lg-6 col-md-12 col-sm-12 col-xs-12"
                        data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                        <h1>Selamat Datang di Aplikasi <br> <em>SI INNA</em></h1>
                        {{-- <p>Lava <a href="#">HTML landing page</a> template is provided by <a
                                href="#">TemplateMo</a>.
                            You can modify and use it for your commercial websites for free of charge. This template is
                            last updated on 29 Oct 2019.</p> --}}
                        <a href="{{ route('login') }}" class="main-button-slider">Masuk</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Header Text End ***** -->
    </div>
    <!-- ***** Welcome Area End ***** -->

    <!-- ***** Features Big Item Start ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="text-center " data-scroll-reveal="enter up move 30px over 0.6s after 0.4s">
                    <br> <br>
                    <h1><b>Panduan Pengajuan <em>PKL</em></b></h1>
                    <br>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <h2>01</h2>
                            <img src="{{ asset('images/buat akun.png') }}" alt="">
                            <h4>Buat Akun</h4>
                            <p>Calon Peserta atau perwakilan dalam kelompok membuat akun terlebih
                                dahulu untuk mendapatkan akses pengajuan PKL.</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter bottom move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <h2>02</h2>
                            <img src="{{ asset('images/pengajuan.png') }}" alt="">
                            <h4>Buat Pengajuan PKL</h4>
                            <p>Ketua kelompok mengisi data-data anggotanya dan melampirkansurat pengajuan PKL.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <h2>03</h2>
                            <img src="{{ asset('images/notif.png') }}" alt="">
                            <h4>Menunggu Surat Balasan</h4>
                            <p>Calon peserta akan mendapatkan notifikasi jika Pengajuan PKL tersebut sudah mendapatkan
                                surat balasan yaitu diterima atau ditolak.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->

    <div class="left-image-decor"></div>

    <!-- ***** Features Big Item Start ***** -->
    <section class="section" id="promotion">
        <div class="container">
            <div class="row">
                <div class="left-image col-lg-4 col-md-6 col-sm-12 mobile-bottom-fix-big"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <img src="{{ asset('images/SI_INNA.png') }}" class="rounded img-fluid d-block mx-auto"
                        alt="App">
                </div>
                <div class="right-text offset-lg-1 col-lg-6 col-md-12 col-sm-12 mobile-bottom-fix">
                    <ul>
                        <li data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                            <img src="" alt="">
                            <div class="text">
                                <h4>Merupakan Singkatan dari Aplika<em>si In</em>tership Ma<em>na</em>gement.</p>
                                    <h4>Aplikasi </h4>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->

    <div class="right-image-decor"></div>

    <!-- ***** Testimonials Starts ***** -->
    <section class="section" id="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="center-heading">
                        <h2>Panduan<em> Peserta PKL</em></h2>
                        <p>Suspendisse vitae laoreet mauris. Fusce a nisi dapibus, euismod purus non, convallis odio.
                            Donec vitae magna ornare, pellentesque ex vitae, aliquet urna.</p>
                    </div>
                </div>
                <div class="col-lg-10 col-md-12 col-sm-12 mobile-bottom-fix-big"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <div class="owl-carousel owl-theme">
                        <div class="item service-item">
                            <div class="testimonial-content">
                                <i><img src="{{ asset('images/DPUBMTR.png') }}" alt=""></i>
                                <h4>Jonathan Smart</h4>
                                <p>“Nullam hendrerit, elit a semper pharetra, ipsum nibh tristique tortor, in tempus
                                    urna elit in mauris.”</p>
                                <span>Besta CTO</span>
                            </div>
                        </div>
                        <div class="item service-item">
                            <div class="author">
                                <i><img src="assets/images/testimonial-author-1.png" alt="Second Author"></i>
                            </div>
                            <div class="testimonial-content">

                                <h4>Martino Tino</h4>
                                <p>“Morbi non mi luctus felis molestie scelerisque. In ac libero viverra, placerat est
                                    interdum, rhoncus leo.”</p>
                                <span>Web Analyst</span>
                            </div>
                        </div>
                        <div class="item service-item">
                            <div class="author">
                                <i><img src="assets/images/testimonial-author-1.png" alt="Author Third"></i>
                            </div>
                            <div class="testimonial-content">
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <h4>George Tasa</h4>
                                <p>“Fusce rutrum in dolor sit amet lobortis. Ut at vehicula justo. Donec quam dolor,
                                    congue a fringilla sed, maximus et urna.”</p>
                                <span>System Admin</span>
                            </div>
                        </div>
                        <div class="item service-item">
                            <div class="author">
                                <i><img src="assets/images/testimonial-author-1.png" alt="Fourth Author"></i>
                            </div>
                            <div class="testimonial-content">
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <h4>Sir James</h4>
                                <p>"Fusce rutrum in dolor sit amet lobortis. Ut at vehicula justo. Donec quam dolor,
                                    congue a fringilla sed, maximus et urna."</p>
                                <span>New Villager</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Testimonials Ends ***** -->


    <!-- ***** Footer Start ***** -->
    <footer id="contact-us">
        <div class="container">
            <div class="footer-content">
                <div class="row">
                    <!-- ***** Contact Form Start ***** -->
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="contact-form">
                            <form id="contact" action="" method="post">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <fieldset>
                                            <input name="name" type="text" id="name"
                                                placeholder="Full Name" required=""
                                                style="background-color: rgba(250,250,250,0.3);">
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <fieldset>
                                            <input name="email" type="text" id="email"
                                                placeholder="E-Mail Address" required=""
                                                style="background-color: rgba(250,250,250,0.3);">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <textarea name="message" rows="6" id="message" placeholder="Your Message" required=""
                                                style="background-color: rgba(250,250,250,0.3);"></textarea>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <button type="submit" id="form-submit" class="main-button">Send Message
                                                Now</button>
                                        </fieldset>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- ***** Contact Form End ***** -->
                    <div class="right-content col-lg-6 col-md-12 col-sm-12">
                        <h2>More About <em>Lava</em></h2>
                        <p>Phasellus dapibus urna vel lacus accumsan, iaculis eleifend leo auctor. Duis at finibus odio.
                            Vivamus ut pharetra arcu, in porta metus. Suspendisse blandit pulvinar ligula ut elementum.
                            <br><br>If you need this contact form to send email to your inbox, you may follow our <a
                                rel="nofollow" href="https://templatemo.com/contact" target="_parent">contact</a>
                            page
                            for more detail.
                        </p>
                        <ul class="social">
                            <li><a href="https://fb.com/templatemo"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="sub-footer">
                        <p>Copyright &copy; 2020 Lava Landing Page

                            | Designed by <a rel="nofollow" href="https://templatemo.com">TemplateMo</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="{{ asset('landing_pages/assets/js/jquery-2.1.0.min.js') }}"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('landing_pages/assets/js/popper.js') }}"></script>
    <script src="{{ asset('landing_pages/assets/js/bootstrap.min.js') }}"></script>

    <!-- Plugins -->
    <script src="{{ asset('landing_pages/assets/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('landing_pages/assets/js/scrollreveal.min.js') }}"></script>
    <script src="{{ asset('landing_pages/assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('landing_pages/assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('landing_pages/assets/js/imgfix.min.js') }}"></script>

    <!-- Global Init -->
    <script src="{{ asset('landing_pages/assets/js/custom.js') }}"></script>

    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>


