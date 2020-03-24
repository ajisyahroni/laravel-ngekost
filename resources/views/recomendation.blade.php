<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Data Kost</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body class="container">
    <h1>Rekomendasi Kost terbaik untuk kamu</h1>
    <div class="row">
        @foreach($kost as $key => $value)
        <div class="col-md-3 mt-4">
            <div class="card">
                <img src="{{ $value['foto'] }}" height="200" class="card-img-top" alt="Card">
                <div class="card-body">
                    <h5 class="card-title">{{ $value['nama'] }}</h5>
                    <p class="card-text">Rp. {{ $value['harga'] }}.000</p>

                    <a href="/detail/{{$value['id']}}" class="btn btn-info btn-small">Lihat</a>
                </div>

            </div>
        </div>
        @endforeach
    </div>
</body>

</html>