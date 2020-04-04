<!DOCTYPE html>
<html lang="en">
  <head>
    <title>User Input &mdash; SPK KOST WP</title>
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
            <h1 class="mb-0 site-logo m-0 p-0"><a href="/user" class="mb-0">NGEKOST</a></h1>
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

    
    <div class="site-blocks-cover overlay" style="background-image: url('{{ asset('werehouse/images/home_2.jpg') }}')" data-aos="fade" id="home-section">


      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-6 mt-lg-5 text-center">
            <h1>HALAMAN REKOMENDASI</h1>
            <p class="mb-5">Silahkan Inputkan Kriteria Kost Sesuai Yang Diinginkan</p>
            
          </div>
        </div>
      </div>

      <a href="#" class="smoothscroll arrow-down"><span class="icon-arrow_downward"></span></a>
    </div>  

    
    <div class="site-section" id="listings-section">
      <div class="container">
        
        <div class="row">
          <div class="col-md-3 order-1 order-md-2">
          <div class="mb-5">
            <h3 class="text-black mb-4 h5 font-family-2 align-center">PERHITUNGAN WP</h3>
            <form action="#">
              <div class="form-group">
                <div class="select-wrap">
                  <h6>Harga Kost</h6>
                  <span class="icon icon-keyboard_arrow_down"></span>
                  <select class="form-control px-3">
                    <option value="">300</option>
                    <option value="">500</option>
                    <option value="">800</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="select-wrap">
                  <h6>Jarak Kost</h6>
                  <span class="icon icon-keyboard_arrow_down"></span>
                  <select class="form-control px-3">
                    <option value="">1000</option>
                    <option value="">750</option>
                    <option value="">500</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="select-wrap">
                  <h6>Luas Kamar</h6>
                  <span class="icon icon-keyboard_arrow_down"></span>
                  <select class="form-control px-3">
                    <option value="">2 x 3</option>
                    <option value="">3 x 3</option>
                    <option value="">3 x 4</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="select-wrap">
                  <h6>Fasilitas Kamar</h6>
                  <span class="icon icon-keyboard_arrow_down"></span>
                  <select class="form-control px-3">
                    <option value="">Kasur</option>
                    <option value="">Guling</option>
                    <option value="">Tv</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="select-wrap">
                  <h6>Fasilitas Penunjang</h6>
                  <span class="icon icon-keyboard_arrow_down"></span>
                  <select class="form-control px-3">
                    <option value="">Kamar mandi</option>
                    <option value="">Tv Bersama</option>
                    <option value="">Parkiran</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="select-wrap">
                  <h6>Fasilitas Lingkungan</h6>
                  <span class="icon icon-keyboard_arrow_down"></span>
                  <select class="form-control px-3">
                    <option value="">Masjid</option>
                    <option value="">Apotek</option>
                    <option value="">Sekolah</option>
                  </select>
                </div>
              </div>
              <button type="submit" class="btn btn-primary">REKOMENDASI</button>
            </form>
            </div>
          </div>

          <div class="col-md-9 order-2 order-md-1">
            <div class="row large-gutters">
              @foreach($kost as $key =>$value)
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-5 ">
                  <div class="ftco-media-1">
                    <div class="ftco-media-1-inner">
                      <a href="/detail/{{$value['id']}}" class="d-inline-block mb-4"><img src="{{ $value->foto }}" alt="FImageo" class="img-fluid"></a>
                      <div class="ftco-media-details">
                        <h3>{{ $value->nama }}</h3>
                        <h4>{{ $value->tipe }}</h4>
                        <br>
                        <p>{{ $value->jarak }} m dari AMIKOM</p>
                        <strong style="color: #37cfa2;">Rp.{{ $value->harga }} 000 / Bulan</strong>
                      </div>
                    </div> 
                  </div>
                </div>
              @endforeach
              </div>
          </div>

        <div class="row mt-4">
          <div class="col-md-9">
            <div class="custom-pagination text-center">
              <span>1</span>
              <a href="#">2</a>
              <a href="#">3</a>
              <span class="more-page">...</span>
              <a href="#">7</a>
            </div>
            
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

  </div> <!-- .site-wrap -->

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