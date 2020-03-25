@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <h3><i class="fas fa-edit"></i>EDIT ALTERNATIF KOS</h3>
    <form enctype="multipart/form-data" method="post" action="/admin/alternatif_kost/update/{{$kost->id}}">
        @csrf
        <div>
            <label>Nama Alternatif</label>
            <input type="hidden" name="id" class="form-control" value="{{ $kost->id }}">
            <input type="text" name="nama_kost" class="form-control" value="{{ $kost->nama }}">
        </div>

        <div>
            <label>Harga</label>
            <input type="text" name="harga_kost" class="form-control" value="{{ $kost->harga }}">
        </div>

        <div>
            <label>Jarak</label>
            <input type="text" name="jarak_kost" class="form-control" value="{{ $kost->jarak }}">
        </div>

        <div>
            <label>Luas Kamar</label>

            <select class="form-control" name="luas_kost">
                <option value="{{ $kost->luas_kamar }}" {{ $kost->luas_kamar == 6 ? 'selected' : ''  }}>2 X 3</option>
                <option value="{{ $kost->luas_kamar }}" {{ $kost->luas_kamar == 9 ? 'selected' : ''  }}>3 X 3</option>
                <option value="{{ $kost->luas_kamar }}" {{ $kost->luas_kamar == 12 ? 'selected' : ''  }}>3 X 4</option>
                <option value="{{ $kost->luas_kamar }}" {{ $kost->luas_kamar == 16 ? 'selected' : ''  }}>4 X 4</option>
                <option value="{{ $kost->luas_kamar }}" {{ $kost->luas_kamar == 20 ? 'selected' : ''  }}>4 X 5</option>
            </select>
        </div>

        <div>
            <label>Tipe Alternatif</label>
            <select class="form-control" name="tipe_alternatif">
                <option value="{{ $kost->tipe }}" {{ $kost->tipe == 'putra' ? 'selected' : ''  }}>putra</option>
                <option value="{{ $kost->tipe }}" {{ $kost->tipe == 'putri' ? 'selected' : ''  }}>putri</option>
            </select>
        </div>

        <div>
            <label>Fasilitas Kamar</label>
            <select class="form-control" name="fasilitas_kamar">
                @foreach($fasilitasKamar as $key => $value)
                <option {{$kost->fasilitasKamar->id == $value->id ? 'selected' : ''}} value="{{$value->id}}">{{$value->nama}}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label>Fasilitas Penunjang</label>
            <select class="form-control" name="fasilitas_penunjang">
                @foreach($fasilitasPenunjang as $key => $value)
                <option {{$kost->fasilitasPenunjang->id == $value->id ? 'selected' : ''}} value="{{$value->id}}">{{$value->nama}}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label>Fasilitas Lingkungan</label>
            <select class="form-control" name="fasilitas_lingkungan">
                @foreach($fasilitasLingkungan as $key => $value)
                <option {{$kost->fasilitasLingkungan->id == $value->id ? 'selected' : ''}} value="{{$value->id}}">{{$value->nama}}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label>Foto</label>
            <br>
            <input id="fotoUploader" type="file" name="file">
            <br>
            <br>
            <img class="img-thumbnail" id="preview" src="{{ $kost->foto }}" alt="">
            <script>
                var foto = document.getElementById('fotoUploader')
                var preview = document.getElementById('preview')

                foto.onchange = function(evt){
                    var reader = new FileReader()
                    var file = evt.target.files[0]

                    reader.onload = function() {
                        preview.src = reader.result
                    }
                    reader.readAsDataURL(file)
                }
            </script>
        </div>
        <button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>
    </form>
</div>

@endsection