<!DOCTYPE html>
<html lang="en">

<head>
  <title>NGEKOST &mdash; SPK KOST WP</title>
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
                <li><a href="/rekomend" class="nav-link">Rekomendasi WP</a></li>
                <li><a href="/about" class="nav-link">About</a></li>
                <li><a href="/login" class="nav-link">Login</a></li>
              </ul>
            </nav>
          </div>
          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white float-right"><span class="icon-menu h3"></span></a></div>
        </div>
      </div>
    </header>

    <div class="site-block-wrap">
      <h1>Data kost runner up</h1>
      @foreach($runner as $key => $value)
      <p>{{ $value['nama'] }}</p>
      @endforeach


      <h1>Data kost biasa aja</h1>
      @foreach($kost as $key => $value)
      <p>{{ $value['nama'] }}</p>
      @endforeach
    </div>

    <a href="#top" class="gototop"><span class="icon-angle-double-up"></span></a>

    <script src="{{ asset('werehouse/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('werehouse/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('werehouse/js/popper.min.js') }}"></script>
    <script src="{{ asset('werehouse/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('werehouse/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('werehouse/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('werehouse/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('werehouse/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('werehouse/js/aos.js') }}"></script>
    <script src="{{ asset('werehouse/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('werehouse/js/jquery.sticky.js') }}"></script>


    <script src="{{ asset('werehouse/js/main.js') }}"></script>

</body>

</html>