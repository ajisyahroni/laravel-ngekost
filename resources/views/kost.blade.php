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
                <li><a href="userinput/" class="nav-link">Rekomendasi WP</a></li>
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
    <div class="owl-carousel with-dots">
      <div class="site-blocks-cover overlay overlay-2" style="background-image: url('{{ asset('werehouse/images/home_1.jpg') }}')" data-aos="fade" id="home-section">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-6 mt-lg-5 text-center">
              <h1 class="text-shadow">Temukan Kostmu Sesuai Keinginanmu</h1>
              <p class="mb-5 text-shadow">Aplikasi ini dibuat untuk memenuhi tugas akhir skripsi S1-Informatika Univeritas AMIKOM Yogyakarta</p>
              <p><a href="userinput/" target="_blank" class="btn btn-primary px-5 py-3">Mulai Gratis</a></p> 
            </div>
          </div>
        </div>
      </div>  
  
      <div class="site-blocks-cover overlay overlay-2" style="background-image: url('{{ asset('werehouse/images/home_2.jpg') }}')" data-aos="fade" id="home-section">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-6 mt-lg-5 text-center">
              <h1 class="text-shadow">Temukan Kostmu Sesuai Keinginanmu</h1>
              <p class="mb-5 text-shadow">Implementasi Weighted Product Untuk Menentukan Kost Mahasiswa AMIKOM Yogyakarta</p>
              <p><a href="userinput/" target="_blank" class="btn btn-primary px-5 py-3">Mulai Gratis</a></p>
            </div>
          </div>
        </div>
      </div>  
    </div>   
  </div>   

  <div class="site-section" id="">
      <div class="container">
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
    </div>
            
    <div class="text-center mb-5">
        <a class="" href="/allKost" ><strong>--- See more ---</strong></a>
    </div>

    <section class="py-5 bg-primary site-section how-it-works" id="howitworks-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="section-title mb-3 text-black">Rekomendasi Weighted Product</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 text-center">
            <div class="pr-5 first-step">
              <span class="text-black">01.</span>
              <h3 class="text-black">Buka Web Ngekost.com</h3>
              <p class="text-black">User Harus mengunjungi website Ngekost</p>
            </div>
          </div>

          <div class="col-md-4 text-center">
            <div class="pr-5 second-step">
              <span class="text-black">02.</span>
              <h3 class="text-dark">Pilih menu rekomendasi</h3>
              <p class="text-black">User memilih menu rekomendasi pada website</p>
            </div>
          </div>

          <div class="col-md-4 text-center">
            <div class="pr-5">
              <span class="text-black">03.</span>
              <h3 class="text-dark">Masukkan kriteria</h3>
              <p class="text-black">User memasukkan kriteria kost sesuai yang akan dicari kemudian klik rekomendasi</p>
            </div>
          </div>

        </div>
      </div>  
    </section>



    <section class="site-section" id="about-section">
      <div class="container">
        <div class="row large-gutters">
          <div class="col-lg-6 mb-5">
              <div class="owl-carousel slide-one-item with-dots">
                  <div><img src="{{ asset('werehouse/images/img_2.jpg') }}" alt="Image" class="img-fluid"></div>
                </div>
          </div>
          <div class="col-lg-6 ml-auto">
            
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
    </section>

    
    <section class="site-section bg-light" id="services-section">
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
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> NGEKOST WEB | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by Colorlib
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