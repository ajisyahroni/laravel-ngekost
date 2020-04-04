<!DOCTYPE html>
<html lang="en">

<head>
<title>Detail Kost</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,900|Oswald:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('werehouse/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('werehouse/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('werehouse/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('werehouse/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('werehouse/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('werehouse/css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('werehouse/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('werehousecss/bootstrap-datepicker.css') }}">

    <link rel="stylesheet" href="{{ asset('werehousefonts/flaticon/font/flaticon.css') }}">

    <link rel="stylesheet" href="{{ asset('werehousecss/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('werehouse/css/style.css') }}">
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  <div class="site-wrap">
    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">
          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo m-0 p-0"><a href="/" class="mb-0">NGEKOST</a></h1>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="/" class="nav-link">Home</a></li>
                <li><a href="/allKost" class="nav-link">All Kost</a></li>
                <li><a href="/userinput/" class="nav-link">Rekomendasi WP</a></li>
                <li><a href="/about" class="nav-link">About</a></li>
                <li><a href="/login" class="nav-link">Login</a></li>
              </ul>
            </nav>
          </div>
          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white float-right"><span class="icon-menu h3"></span></a></div>
        </div>
      </div>
      
    </header>

    
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url('{{ asset('werehouse/images/home_2.jpg') }}')" data-aos="fade">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-5 mx-auto mt-lg-5 text-center">
            <h1>{{ $detail_kost->nama }}</h1>
            <p class="mb-5"><strong class="text-white">Rp. {{ $detail_kost->harga }} 000</strong></p>
          </div>
        </div>
      </div>
      <a href="/detail" class=""><span class="icon-arrow_downward"></span></a>
    </div>  

    
  
      <div class="container">
        <div class="row">
          <div class="col-lg-7 mt-5">
            <div>
              <div><img src="{{ $detail_kost->foto }}" alt="Image" class="img-fluid"></div>
            </div>
          </div>
          <div class="col-lg-5 pl-lg-5 ml-auto">
            <div class="mb-5 mt-5">
              <h6 class="text" style="color: #37cfa2;">Details KOST</h6>
              <h3>{{ $detail_kost->nama }}</h3>
              <h4>{{ $detail_kost->tipe}}</h4>
              <p>Luas Kamar {{ $detail_kost->luas_kamar }} m2 , Jarak ke AMIKOM {{$detail_kost->jarak}} meter dari AMIKOM
              </p>
              <h4>Harga Kost / Bulan</h4>
              <h2 style="color: aqua;">Rp. {{ $detail_kost->harga }} 000</h2>
              <br>
              <h5 class="text-black">Fasilitas</h5>
              <p>
                <strong style="color: aqua;">Fasilitas Kamar adalah</strong> {{$detail_kost->fasilitasKamar->nama}},
                <strong style="color: aqua;">Fasilitas Penunjang adalah</strong> {{$detail_kost->fasilitasPenunjang->nama}},
                <strong style="color: aqua;">Fasilitas Umum di sekitar kos adalah</strong>{{$detail_kost->fasilitasPenunjang->nama}}
              </p>
              <p><a href="/" class="btn btn-primary">Kembali</a></p>
            </div>
          </div>
        </div>
      </div>

    
    <footer>
      <div class="container">
        <div class="row text-center">
          <div class="col-md-12">
            <p class="copyright">
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> NGEKOST WEB | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by Colorlib
            </p>
            </div>
          </div>
        </div>
      </div>
    </footer>

  </div>

  <a href="#top" class="gototop"><span class="icon-angle-double-up"></span></a> 

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>

  
  <script src="js/main.js"></script>
    
  </body>
</html>