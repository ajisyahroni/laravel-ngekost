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
    </header><!-- #header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="clearfix">
        <div class="container d-flex h-100">
            <div class="row justify-content-center align-self-center">
                <div class="col-md-6 intro-info order-md-first order-last">
                    <h2>Cari Kost ?<br>pake <span>Ngekost</span> aja</h2>
                    <div>
                        <a href="#services" class="btn-get-started scrollto">Mulai</a>
                    </div>
                </div>

                <div class="col-md-6 intro-img order-md-last order-first">
                    <img src="{{asset('/img/intro-img.svg')}}" alt="" class="img-fluid">
                </div>
            </div>

        </div>
    </section><!-- End Hero -->

    <main id="main">


        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container">

                <header class="section-header">
                    <h3>Daftar Kost</h3>
                    <p>Daftar kost-kostan yang tersedia dalam aplikasi ini</p>
                </header>

                <div class="row">
                    @foreach($kost as $key => $value)
                    <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
                        <div class="box">
                            <img height="200px" src="{{ $value->foto }}" class="img-fluid" alt="">
                            <h4 class="title mt-3"><a href="">{{ $value->nama }}</a></h4>
                            <p class="description">
                                <div>Rp. <strong style="color: #1bb1dc;">{{ $value->harga }}</strong> / bln</div>
                                <div class="mt-2" style="color: #1bb1dc;">{{ $value->jarak }}m dari amikom</div>

                            </p>
                            <a href="/detail/{{$value['id']}}" class="btn btn-info btn-block mt-3">Lihat</a>
                        </div>
                    </div>
                    @endforeach

                </div>

            </div>
        </section><!-- End Services Section -->


        <!-- ======= Call To Action Section ======= -->
        <section id="call-to-action" class="call-to-action wow fadeInUp">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 text-center text-lg-left">
                        <h3 class="cta-title">Tak kasih rekomendasi</h3>
                        <p class="cta-text"> Fitur rekomendasi adalah membantu kamu dalam mencari kost sesuai dengan kriteria kost yang kamu cari</p>
                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle" href="userinput/">Coba Gratis</a>
                    </div>
                </div>

            </div>
        </section><!--  End Call To Action Section -->

        <!-- ======= Features Section ======= -->
        <section id="features" class="features">
            <div class="container">

                <div class="row feature-item">
                    <div class="col-lg-6 wow fadeInUp">
                        <img src="{{ asset('img/features-1.svg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
                        <h4>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h4>
                        <p>
                            Ipsum in aspernatur ut possimus sint. Quia omnis est occaecati possimus ea. Quas molestiae perspiciatis
                            occaecati qui rerum. Deleniti quod porro sed quisquam saepe. Numquam mollitia recusandae non ad at et a.
                        </p>
                        <p>
                            Ad vitae recusandae odit possimus. Quaerat cum ipsum corrupti. Odit qui asperiores ea corporis deserunt
                            veritatis quidem expedita perferendis. Qui rerum eligendi ex doloribus quia sit. Porro rerum eum eum.
                        </p>
                    </div>
                </div>

                <div class="row feature-item mt-5 pt-5">
                    <div class="col-lg-6 wow fadeInUp order-1 order-lg-2">
                        <img src="{{asset('/img/features-2.svg')}}" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1">
                        <h4>Neque saepe temporibus repellat ea ipsum et. Id vel et quia tempora facere reprehenderit.</h4>
                        <p>
                            Delectus alias ut incidunt delectus nam placeat in consequatur. Sed cupiditate quia ea quis. Voluptas nemo
                            qui aut distinctio. Cumque fugit earum est quam officiis numquam. Ducimus corporis autem at blanditiis
                            beatae incidunt sunt.
                        </p>
                        <p>
                            Voluptas saepe natus quidem blanditiis. Non sunt impedit voluptas mollitia beatae. Qui esse molestias.
                            Laudantium libero nisi vitae debitis. Dolorem cupiditate est perferendis iusto.
                        </p>
                        <p>
                            Eum quia in. Magni quas ipsum a. Quis ex voluptatem inventore sint quia modi. Numquam est aut fuga
                            mollitia exercitationem nam accusantium provident quia.
                        </p>
                    </div>

                </div>

            </div>
        </section><!-- End Features Section -->



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