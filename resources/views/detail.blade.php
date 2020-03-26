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
        <div class="container">

            <div class="logo float-left">
                <!-- Uncomment below if you prefer to use an image logo -->
                <h1 class="text-light"><a href="#intro" class="scrollto"><span>NGEKOST</span></a></h1>
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
    </header>
    <main id="main">
        <!-- ======= Features Section ======= -->
        <section id="features" class="features">
            <div class="container">

                <div class="row feature-item">
                    <div class="col-lg-6 wow fadeInUp">
                        <img src="{{ $detail_kost->foto }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
                        <h4>{{ $detail_kost->nama }}</h4>
                        <hr>
                        <h5>
                            Rp. <strong style="color:  #1bb1dc;">{{ $detail_kost->harga }},000</strong> / bln
                        </h5>
                        <p>
                            kost <strong>{{ $detail_kost->tipe}}</strong> luas kamar {{ $detail_kost->luas_kamar }} m, 
                            <br>
                            <span style="color:  #1bb1dc;">
                            berjarak {{$detail_kost->jarak}} dari AMIKOM</span>
                        </p>
                        <h4>Fasilitas</h4>
                        <p>
                            <strong style="color:  #1bb1dc;">Fasilitas kamar</strong>
                            adalah {{$detail_kost->fasilitasKamar->nama}},
                            <strong style="color:  #1bb1dc;">ditunjang fasilitas</strong>
                            {{$detail_kost->fasilitasPenunjang->nama}},
                            dilengkapi <strong style="color:  #1bb1dc;">lingkungan</strong> dengan fasilitas {{$detail_kost->fasilitasPenunjang->nama}}</p>
                    </div>
                </div>


            </div>
        </section><!-- End Features Section -->


        <section id="services" class="services section-bg">
            <div class="container">

                <header class="section-header">
                    <h3>Lihat Kost Lain</h3>
                    <p>Daftar kost-kostan yang tersedia dalam aplikasi ini</p>
                </header>

                <div class="row">
                    @foreach($suggested_kost as $key => $value)
                    <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
                        <div class="box">
                            <img height="200" src="{{ $value->foto }}" class="img-fluid" alt="">
                            <h4 class="title mt-3"><a href="">{{ $value->nama }}</a></h4>
                            <p class="description">
                                <div>Rp. <strong style="color: #1bb1dc;">{{ $value->harga }}</strong>/bln </div>
                                <div class="mt-2" style="color: #1bb1dc;">{{ $value->jarak }}m dari amikom</div>

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