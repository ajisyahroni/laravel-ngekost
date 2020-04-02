<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail kost</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>


<body>
    <div class="container mb-5 mt-5">
        <p class="mb-5">halaman detail kost</p>
        <div class="row">
            <div class="col-md-4">
                <img class="img-thumbnail" id="foto" src="{{$detail_kost->foto}}" alt="">
            </div>
            <div class="col-md-8">
                <h3>Detail Produk</h3>
                <hr>
                <p>Nama : {{$detail_kost->nama}}</p>
                <p>Harga : Rp. {{$detail_kost->harga}},000-</p>
                <p>Luas kamar : {{$detail_kost->luas_kamar}}</p>
                <div class="alert alert-primary">berjarak {{$detail_kost->jarak}} m dari AMIKOM</div>
                <hr>
                <p>Deskripsi kost : </p>
                <strong>Fasilitas Kamar</strong>
                <p>{{$detail_kost->fasilitasKamar->nama}}</p>
                <strong>Fasilitas Penunjang</strong>
                <p>{{$detail_kost->fasilitasPenunjang->nama}}</p>
                <strong>Fasilitas Lingkungan</strong>
                <p>{{$detail_kost->fasilitasLingkungan->nama}}</p>
            </div>
        </div>
    </div>


</body>

</html>