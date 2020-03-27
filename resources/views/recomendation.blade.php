<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Ngekost</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('img/favicon.png')}}" rel="icon">
    <link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css' )}}" rel="stylesheet">
    <link href="{{asset('/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('/vendor/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('/vendor/venobox/venobox.css')}}" rel="stylesheet">
    <link href="{{asset('/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('/css/style.css')}}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Rapid - v2.0.0
  * Template URL: https://bootstrapmade.com/rapid-multipurpose-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header">

        <!-- <div id="topbar">
      <div class="container">
        <div class="social-links">
          <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
          <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
          <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
          <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
        </div>
      </div>
    </div> -->

        <div class="container">

            <div class="logo float-left">
                <!-- Uncomment below if you prefer to use an image logo -->
                <h1 class="text-light"><a href="/" class="scrollto"><span>NGEKOST</span></a></h1>
                <!-- <a href="#header" class="scrollto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
            </div>

            <nav class="main-nav float-right d-none d-lg-block">
                <ul>
                    <li>
                        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                    </li>
                    <li>
                        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                    </li>
                </ul>
            </nav><!-- .main-nav -->

        </div>
    </header><!-- #header -->


    <main id="main">


        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container">

                <header class="section-header">
                    <h3>Hasil Rekomendasi</h3>
                    <p>Menggunakan Sistem Penunjang Keputusan</p>
                </header>
                <div class="row">
                    @foreach($runner as $key => $value)
                    <div class="col-md-6">


                        <div class="box">
                            <img src="{{ $value['foto'] }}" class="img-fluid" alt="">
                            <h4 class="title mt-3"><a href="">{{ $value['nama'] }}</a></h4>
                            <p class="description">
                                <div>Rp. <strong style="color: #1bb1dc;">{{ $value['harga'] }}</strong> / bln</div>
                                <div class="mt-2" style="color: #1bb1dc;">{{ $value['jarak'] }}m dari amikom</div>

                            </p>
                            <a href="/detail/{{$value['id']}}" class="btn btn-info btn-block mt-3">Lihat</a>
                        </div>


                    </div>
                    @endforeach


                </div>

                <div class="row">
                    @foreach($kost as $key => $value)
                    <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
                        <div class="box">
                            <img height="200px" src="{{ $value['foto'] }}" class="img-fluid" alt="">
                            <h4 class="title mt-3"><a href="">{{ $value['nama'] }}</a></h4>
                            <p class="description">
                                <div>Rp. <strong style="color: #1bb1dc;">{{ $value['harga'] }}</strong> / bln</div>
                                <div class="mt-2" style="color: #1bb1dc;">{{ $value['jarak'] }}m dari amikom</div>

                            </p>
                            <a href="/detail/{{$value['id']}}" class="btn btn-info btn-block mt-3">Lihat</a>
                        </div>
                    </div>
                    @endforeach

                </div>

            </div>
        </section><!-- End Services Section -->



    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="section-bg">


        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong>Rapid</strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Rapid
      -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End  Footer -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{asset('/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
    <script src="{{asset('/vendor/php-email-form/validate.js')}}"></script>
    <script src="{{asset('/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('/vendor/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('/vendor/venobox/venobox.min.js')}}"></script>
    <script src="{{asset('/vendor/mobile-nav/mobile-nav.js')}}"></script>
    <script src="{{asset('/vendor/wow/wow.min.js')}}"></script>
    <script src="{{asset('/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('/vendor/waypoints/jquery.waypoints.min.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{asset('/js/main.js')}}"></script>

</body>

</html>