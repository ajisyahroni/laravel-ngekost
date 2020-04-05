<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>User Input</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('/img/favicon.png')}}" rel="icon">
    <link href="{{asset('/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css' )}}" rel="stylesheet">
    <link href="{{asset('/css/style.css')}}" rel="stylesheet">
    <!-- =======================================================
  * Template Name: Rapid - v2.0.0
  * Template URL: https://bootstrapmade.com/rapid-multipurpose-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="container">
    <form action="/rekomend">
        <!-- TYPE -->
        <div class="mt-5" id="typeSection">
            <h2>Pilih type kost</h2>
            <input type="hidden" name="tipe" value="campur" id="tipe">
            <div class="row text-center">
                <div class="col-md-4 my-2"><img style="cursor: pointer" onclick="selectType(this)" id="putra" width="200" height="200" src="{{asset('/img/type/man.png')}}" alt="">
                    <p class="mt-2">Putra</p>
                </div>
                <div class="col-md-4 my-2"><img style="cursor: pointer" onclick="selectType(this)" id="putri" width="200" height="200" src="{{asset('/img/type/woman.png')}}" alt="">
                    <p class="mt-2">Putri</p>
                </div>
                <div class="col-md-4 my-2"><img style="cursor: pointer" onclick="selectType(this)" id="campur" width="200" height="200" src="{{asset('/img/type/bisex.png')}}" alt="">
                    <p class="mt-2">Campur</p>
                </div>
            </div>
        </div>
        <!-- HARGA -->
        <div class="mt-5 d-none" id="hargaSection">
            <h2>Harga kost penting gasihh menurut lo ?</h2>
            <img width="200" height="200" class="mx-auto d-block" src="{{asset('/emoticon/cukup-penting.png')}}" id="preview" alt="">

            <h3 class="text-center mt-3"><strong id="textHarga">cukup penting</strong></h3>


            <input value="50" class="custom-range" type="range" name="" id="sliderHarga">
            <input type="hidden" value="3" name="harga" id="harga">
        </div>

        <!-- JARAK -->
        <div class="mt-5 d-none" id="jarakSection">
            <h2>Jarak kost penting gasihh menurut lo ?</h2>
            <img width="200" height="200" class="mx-auto d-block" src="{{asset('/emoticon/cukup-penting.png')}}" id="previewJarak" alt="">

            <h3 class="text-center mt-3"><strong id="textJarak">cukup penting</strong></h3>


            <input class="custom-range" type="range" name="" id="sliderJarak">
            <input type="hidden" value="3" name="jarak" id="jarak">
        </div>

        <!-- LUAS KAMAR -->
        <div class="mt-5 d-none" id="luasKamarSection">
            <h2>Luas Kamar kost penting gasihh menurut lo ?</h2>
            <img width="200" height="200" class="mx-auto d-block" src="{{asset('/emoticon/cukup-penting.png')}}" id="previewLuasKamar" alt="">

            <h3 class="text-center mt-3"><strong id="textLuasKamar">cukup penting</strong></h3>


            <input class="custom-range" type="range" name="" id="sliderLuasKamar">
            <input type="hidden" value="3" name="luasKamar" id="luasKamar">
        </div>

        <!-- FASILITAS KAMAR -->
        <div class="mt-5 d-none" id="fasilitasKamarSection">
            <h2>Fasilitas Kamar kost penting gasihh menurut lo ?</h2>
            <i>Kasur, TV, dispenser dll</i>
            <img width="200" height="200" class="mx-auto d-block" src="{{asset('/emoticon/cukup-penting.png')}}" id="previewFasilitasKamar" alt="">

            <h3 class="text-center mt-3"><strong id="textFasilitasKamar">cukup penting</strong></h3>


            <input class="custom-range" type="range" name="" id="sliderFasilitasKamar">
            <input type="hidden" value="3" name="fasilitasKamar" id="fasilitasKamar">
        </div>

        <!-- FASILITAS PENUNJANG -->
        <div class="mt-5 d-none" id="fasilitasPenunjangSection">
            <h2>Fasilitas Penunjang kost penting gasihh menurut lo ?</h2>
            <i>kamar mandi dalam, tempat jemuran, mesin cuci dll</i>
            <img width="200" height="200" class="mx-auto d-block" src="{{asset('/emoticon/cukup-penting.png')}}" id="previewFasilitasPenunjang" alt="">

            <h3 class="text-center mt-3"><strong id="textFasilitasPenunjang">cukup penting</strong></h3>


            <input class="custom-range" type="range" name="" id="sliderFasilitasPenunjang">
            <input type="hidden" value="3" name="fasilitasPenunjang" id="fasilitasPenunjang">
        </div>

        <!-- FASILITAS LINGKUNGAN -->
        <div class="mt-5 d-none" id="fasilitasLingkunganSection">
            <h2>Fasilitas Lingkungan kost penting gasihh menurut lo ?</h2>
            <i>Deket akses publik terminal, kantin dll</i>
            <img width="200" height="200" class="mx-auto d-block" src="{{asset('/emoticon/cukup-penting.png')}}" id="previewFasilitasLingkungan" alt="">

            <h3 class="text-center mt-3"><strong id="textFasilitasLingkungan">cukup penting</strong></h3>


            <input class="custom-range" type="range" name="" id="sliderFasilitasLingkungan">
            <input type="hidden" value="3" name="fasilitasLingkungan" id="fasilitasLingkungan">
        </div>

        <!-- SUMBIMT BUTTON -->
        <input type="submit" id="submitButton" class="btn btn-block btn-success d-none" value="oke">
    </form>


    <button id="buttonChangeStep" onclick="changeStep()" class="btn btn-block btn-info mt-2">Next</button>


    <script>
        var step = 0;

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
        // TIPE 
        var typeSection = document.getElementById("typeSection")
        var tipe = document.getElementById("tipe")

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

        function selectType(evt) {
            tipe.value = evt.id
            // REMOVE ALL STYLE

            let putra = document.getElementById("putra")
            let putri = document.getElementById("putri")
            let campur = document.getElementById("campur")
            if (putra.classList.contains("border")) {
                putra.classList.remove("border")
            } else if (putri.classList.contains("border")) {
                putri.classList.remove("border")
            } else {
                campur.classList.remove("border")
            }


            document.getElementById(evt.id).classList.add("border")
        }

        function changeStep() {

            step = step + 1;
            switch (step) {
                case 1:
                    typeSection.style.display = "none"
                    hargaSection.classList.remove("d-none")
                    break;
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
        }
    </script>
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

</body>

</html>