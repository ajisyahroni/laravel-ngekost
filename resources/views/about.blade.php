<!DOCTYPE html>
<html lang="en">
<head>
    <title>About NGEKOST</title>
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
                <li><a href="/admin/login" class="nav-link">Login</a></li>
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
            <h1>About NGEKOST</h1>
            <p class="mb-5"><strong class="text-white">Apa itu NGEKOST?</strong></p>
          </div>
        </div>
      </div>

      <a href="#" class="smoothscroll arrow-down"><span class="icon-arrow_downward"></span></a>
    </div>  

      <div class="container">
      <div class="row large-gutters">
          <div class="col-lg-6 mb-5 mt-5">
              <div class="owl-carousel slide-one-item with-dots">
                  <div><img src="{{ asset('werehouse/images/img_2.jpg') }}" alt="Image" class="img-fluid"></div>
                </div>
          </div>
          <div class="col-lg-6 ml-auto mt-5">
            
            <h2 class="section-title mb-3">NGEKOST</h2>
                <p class="lead">Sistem Pendukung Keputusan Untuk Rekomendasi Kost Mahasiswa AMIKOM</p>
                <p><strong>Ngekost</strong> adalah aplikasi berbasis web yang membantu para pencari kost area Condong Catur Yogyakarta, aplikasi ini memiliki daftar kost di area Condong Catur.

                  Aplikasi ini dilengkapi fitur rekomendasi kost-kostan berdasarkan kriteria keinginan user, Data kost yang digunakan dalam penelitian ini diperoleh dari startup MAMIKOS, data bersifat publik tanpa menyalahi aturan. Dengan Kriteria Perhitungan Sebagai Berikut :
                <ul class="list-unstyled ul-check success">
                  <li>Harga Kost / Bulan</li>
                  <li>Jarak Kost Ke AMIKOM (m)</li>
                  <li>Luas Kamar (m2)</li>
                  <li>Fasilitas Kamar</li>
                  <li>Fasilitas Penunjang</li>
                  <li>Fasilitas Lingkungan Sekitar Kost</li>
                </ul>
          </div>
        </div>
      </div>

      <section class="site-section bg-light" id="">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">WEIGHTED PRODUCT</h2>
          </div>
        </div>
        <div>
          <P><strong>Metode Weighted Product (WP)</strong> merupakan salah satu metode untuk menyelesaikan masalah Multi Attribute Decision Making(MADM) yang menggunakan perkalian untuk menghubungkan rating atribut,dimana rating setiap atribut harus dipangkatkan dulu dengan bobot atribut yang bersangkutan (Yoon,1989).
            Langkah - langkah perhitungan metode Weighted Product (WP) :
            <ol>
              <li>Menentukan kriteria-kriteria yang akan dijadikan acuan dalam pengambilan keputusan</li>
              <li>Menentukan input awal dan input akhir untuk merubah nama inputan menjadi nilai rating kecocokan dan menentukan bobot setiap kriteria</li>
              <li>Mengubah data inputan menjadi nilai rating kecocokan</li>
              <li>Melakukan perbaikan bobot dari setiap kriteria dengan cara menjumlahkan bobot setiap kriteria yang dilanjutkan dengan setiap bobot awal kriteria dibagi dengan hasil penjumlahan bobot kriteria</li>
              <li>Menentukan nilai vektor S alternatif dengan cara mengalikan data nilai rating kecocokan yang berpangkat positif dari hasil perbaikan bobot kriteria</li>
            </ol>
          </div>
      </div>
    </section>

    
    <footer>
      <div class="container">
        <div class="row text-center">
          <div class="col-md-12">
            <p class="copyright">
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> NGEKOST WEB
            </p>
            </div>
          </div>
        </div>
      </div>
    </footer>

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