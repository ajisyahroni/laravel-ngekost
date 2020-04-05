<!DOCTYPE html>
<html lang="en">

<head>
  <title>NGEKOST INPUT</title>
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
            <h1>Slider Bobot Kriteria Sesuai Keinginanmu</h1>
            <p class="mb-5"><strong class="text-white">Geser Slider!</strong></p>
          </div>
        </div>
      </div>

      <a href="#" class="smoothscroll arrow-down"><span class="icon-arrow_downward"></span></a>
    </div>

    <div class="container">
      <form action="/rekomend">

        <!-- HARGA -->
        <div class="mt-5" id="hargaSection">
          <h2 class="text-center mb-3 ">Seberapa penting HARGA KOST dalam memilih kost?</h2>
          <img width="200" height="200" class="mx-auto d-block" src="{{asset('/emoticon/cukup-penting.png')}}" id="preview" alt="">

          <h3 class="text-center mt-3"><strong id="textHarga">cukup penting</strong></h3>


          <input value="50" class="custom-range" type="range" name="" id="sliderHarga">
          <input type="hidden" value="3" name="harga" id="harga">
        </div>

        <!-- JARAK -->
        <div class="mt-5 d-none" id="jarakSection">
          <h2 class="text-center mb-3 ">Jarak kost penting gasihh menurut lo ?</h2>
          <img width="200" height="200" class="mx-auto d-block" src="{{asset('/emoticon/cukup-penting.png')}}" id="previewJarak" alt="">

          <h3 class="text-center mt-3"><strong id="textJarak">cukup penting</strong></h3>


          <input class="custom-range" type="range" name="" id="sliderJarak">
          <input type="hidden" value="3" name="jarak" id="jarak">
        </div>

        <!-- LUAS KAMAR -->
        <div class="mt-5 d-none" id="luasKamarSection">
          <h2 class="text-center mb-3 ">Luas Kamar kost penting gasihh menurut lo ?</h2>
          <img width="200" height="200" class="mx-auto d-block" src="{{asset('/emoticon/cukup-penting.png')}}" id="previewLuasKamar" alt="">

          <h3 class="text-center mt-3"><strong id="textLuasKamar">cukup penting</strong></h3>


          <input class="custom-range" type="range" name="" id="sliderLuasKamar">
          <input type="hidden" value="3" name="luasKamar" id="luasKamar">
        </div>

        <!-- FASILITAS KAMAR -->
        <div class="mt-5 d-none" id="fasilitasKamarSection">
          <h2 class="text-center mb-3 ">Fasilitas Kamar kost penting gasihh menurut lo ?</h2>
          <i>Kasur, TV, dispenser dll</i>
          <img width="200" height="200" class="mx-auto d-block" src="{{asset('/emoticon/cukup-penting.png')}}" id="previewFasilitasKamar" alt="">

          <h3 class="text-center mt-3"><strong id="textFasilitasKamar">cukup penting</strong></h3>


          <input class="custom-range" type="range" name="" id="sliderFasilitasKamar">
          <input type="hidden" value="3" name="fasilitasKamar" id="fasilitasKamar">
        </div>

        <!-- FASILITAS PENUNJANG -->
        <div class="mt-5 d-none" id="fasilitasPenunjangSection">
          <h2 class="text-center mb-3 ">Fasilitas Penunjang kost penting gasihh menurut lo ?</h2>
          <i>kamar mandi dalam, tempat jemuran, mesin cuci dll</i>
          <img width="200" height="200" class="mx-auto d-block" src="{{asset('/emoticon/cukup-penting.png')}}" id="previewFasilitasPenunjang" alt="">

          <h3 class="text-center mt-3"><strong id="textFasilitasPenunjang">cukup penting</strong></h3>


          <input class="custom-range" type="range" name="" id="sliderFasilitasPenunjang">
          <input type="hidden" value="3" name="fasilitasPenunjang" id="fasilitasPenunjang">
        </div>

        <!-- FASILITAS LINGKUNGAN -->
        <div class="mt-5 d-none" id="fasilitasLingkunganSection">
          <h2 class="text-center mb-3 ">Fasilitas Lingkungan kost penting gasihh menurut lo ?</h2>
          <i class="text-center">Deket akses publik terminal, kantin dll</i>
          <img width="200" height="200" class="mx-auto d-block" src="{{asset('/emoticon/cukup-penting.png')}}" id="previewFasilitasLingkungan" alt="">

          <h3 class="text-center mt-3"><strong id="textFasilitasLingkungan">cukup penting</strong></h3>


          <input class="custom-range" type="range" name="" id="sliderFasilitasLingkungan">
          <input type="hidden" value="3" name="fasilitasLingkungan" id="fasilitasLingkungan">
        </div>

        <!-- SUMBIMT BUTTON -->
        <input type="submit" id="submitButton" class="btn btn-block btn-success d-none" value="oke">
      </form>


      <button id="buttonChangeStep" onclick="changeStep()" class="btn btn-block btn-info mt-2 mb-5">Next</button>



      <footer>
        <div class="container">
          <div class="row text-center">
            <div class="col-md-12">
              <p class="copyright">
                Copyright &copy;<script>
                  document.write(new Date().getFullYear());
                </script> NGEKOST WEB | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by Colorlib
              </p>
            </div>
          </div>
        </div>
    </div>
    </footer>

  </div>


  <script>
    var step = 1;

    function setElement(SliderElement, TextElement, ShadowElement, PreviewElement) {
      if (SliderElement >= 0 && SliderElement <= 20) {
        TextElement.innerHTML = "sangat tidak penting";
        ShadowElement.value = 1;
        PreviewElement.src = "/emoticon/sangat-tidak-penting.png"
      } else if (SliderElement > 20 && SliderElement <= 40) {
        TextElement.innerHTML = "tidak penting";
        ShadowElement.value = 2;
        PreviewElement.src = "/emoticon/tidak-penting.png"
      } else if (SliderElement > 40 && SliderElement <= 60) {
        TextElement.innerHTML = "cukup penting"
        ShadowElement.value = 3;
        PreviewElement.src = "/emoticon/cukup-penting.png"
      } else if (SliderElement > 60 && SliderElement <= 80) {
        TextElement.innerHTML = "penting"
        ShadowElement.value = 4;
        PreviewElement.src = "/emoticon/penting.png"
      } else {
        TextElement.innerHTML = "sangat penting"
        ShadowElement.value = 5;
        PreviewElement.src = "/emoticon/sangat-penting.png"
      }
    }
    // HARGA
    var hargaSection = document.getElementById("hargaSection")
    var slider = document.getElementById("sliderHarga")
    var textHarga = document.getElementById("textHarga")
    var harga = document.getElementById("harga")
    var preview = document.getElementById("preview")
    slider.oninput = function() {
      setElement(slider.value, textHarga, harga, preview)
    }
    // JARAK
    var jarakSection = document.getElementById("jarakSection")
    var sliderJarak = document.getElementById("sliderJarak")
    var textJarak = document.getElementById("textJarak")
    var jarak = document.getElementById("jarak")
    var previewJarak = document.getElementById("previewJarak")
    sliderJarak.oninput = function() {
      setElement(sliderJarak.value, textJarak, jarak, previewJarak)
    }
    // LUAS KAMAR
    var luasKamarSection = document.getElementById("luasKamarSection")
    var sliderLuasKamar = document.getElementById("sliderLuasKamar")
    var textLuasKamar = document.getElementById("textLuasKamar")
    var luasKamar = document.getElementById("luasKamar")
    var previewLuasKamar = document.getElementById("previewLuasKamar")
    sliderLuasKamar.oninput = function() {
      setElement(sliderLuasKamar.value, textLuasKamar, luasKamar, previewLuasKamar)
    }
    // FASILITAS KAMAR
    var fasilitasKamarSection = document.getElementById("fasilitasKamarSection")
    var sliderFasilitasKamar = document.getElementById("sliderFasilitasKamar")
    var textFasilitasKamar = document.getElementById("textFasilitasKamar")
    var fasilitasKamar = document.getElementById("fasilitasKamar")
    var previewFasilitasKamar = document.getElementById("previewFasilitasKamar")
    sliderFasilitasKamar.oninput = function() {
      setElement(sliderFasilitasKamar.value, textFasilitasKamar, fasilitasKamar, previewFasilitasKamar)
    }
    // FASILITAS PENUNJANG
    var fasilitasPenunjangSection = document.getElementById("fasilitasPenunjangSection")
    var sliderFasilitasPenunjang = document.getElementById("sliderFasilitasPenunjang")
    var textFasilitasPenunjang = document.getElementById("textFasilitasPenunjang")
    var fasilitasPenunjang = document.getElementById("fasilitasPenunjang")
    var previewFasilitasPenunjang = document.getElementById("previewFasilitasPenunjang")
    sliderFasilitasPenunjang.oninput = function() {
      setElement(sliderFasilitasPenunjang.value, textFasilitasPenunjang, fasilitasPenunjang, previewFasilitasPenunjang)
    }
    // FASILITAS LINGKUNGAN
    var fasilitasLingkunganSection = document.getElementById("fasilitasLingkunganSection")
    var sliderFasilitasLingkungan = document.getElementById("sliderFasilitasLingkungan")
    var textFasilitasLingkungan = document.getElementById("textFasilitasLingkungan")
    var fasilitasLingkungan = document.getElementById("fasilitasLingkungan")
    var previewFasilitasLingkungan = document.getElementById("previewFasilitasLingkungan")
    sliderFasilitasLingkungan.oninput = function() {
      setElement(sliderFasilitasLingkungan.value, textFasilitasLingkungan, fasilitasLingkungan, previewFasilitasLingkungan)
    }

    function changeStep() {
      step = step + 1;
      switch (step) {
        case 2:
          hargaSection.style.display = "none"
          jarakSection.classList.remove("d-none")
          break;
        case 3:
          jarakSection.style.display = "none"
          luasKamarSection.classList.remove("d-none")
          break;
        case 4:
          luasKamarSection.style.display = "none"
          fasilitasKamarSection.classList.remove("d-none")
          break;
        case 5:
          fasilitasKamarSection.style.display = "none"
          fasilitasPenunjangSection.classList.remove("d-none")
          break;
        case 6:
          fasilitasPenunjangSection.style.display = "none"
          fasilitasLingkunganSection.classList.remove("d-none")
          break;
        default:
          document.getElementById("buttonChangeStep").style.display = "none"
          document.getElementById("submitButton").classList.remove("d-none")
          break;
      }

    </script>

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