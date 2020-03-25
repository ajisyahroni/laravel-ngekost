@extends('layouts.master')

@section('content')
<div id="content">
  <div class="container-fluid">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Alternatif Kost</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_alternatif"><i class="fas fa-plus fa-sm"></i>Tambah Alternatif</button>
          <table class="table table-bordered" id="table_id" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No.</th>
                <th>Nama Kost</th>
                <th>Harga (rb/bulan)</th>
                <th>Jarak (m)</th>
                <th>Luas Kamar (m2)</th>
                <th>Photo</th>
                <th>Tipe</th>
                <th>Fasilitas Kamar</th>
                <th>Fasilitas Penunjang</th>
                <th>Fasilitas Lingkungan</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              {{$no = 1}}
              @foreach($data_kosts as $kost)

              <tr>
                <td>{{ $no++ }}.</td>
                <td>{{ $kost->nama}}</td>
                <td>{{ $kost->harga}}</td>
                <td>{{ $kost->jarak}}</td>
                <td>{{ $kost->luas_kamar}}</td>
                <td><img width="60px" src="{{ $kost->foto }}"></td>
                <td>{{ $kost->tipe}}</td>
                <td>{{ $kost->fasilitasKamar->nama }}</td>
                <td>{{ $kost->fasilitasPenunjang->nama }}</td>
                <td>{{ $kost->fasilitasLingkungan->nama }}</td>
                <td>
                  <a href="/admin/alternatif_kost/edit/{{ $kost->id }}" class="btn btn-primary btn-sm"><i class=" fa fa-edit"></i></a>
                  <a href="/admin/alternatif_kost/hapus/{{ $kost->id }}" class="btn btn-danger btn-sm"><i class=" fa fa-trash"></i></a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_alternatif" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">FORM TAMBAH ALTERNATIF KOST</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/admin/alternatif_kost/store" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label>Nama Alternatif</label>
            <input type="text" name="nama_kost" class="form-control">
          </div>

          <div class="form-group">
            <label>Harga (/Bulan)</label>
            <input type="text" name="harga_kost" class="form-control">
          </div>

          <div class="form-group">
            <label>Jarak ke AMIKOM (m)</label>
            <input type="text" name="jarak_kost" class="form-control">
          </div>

          <div class="form-group">
            <label>Luas Kamar (m2)</label>
            <select class="form-control" name="luas">
              <option value="6">2 X 3</option>
              <option value="9">3 X 3</option>
              <option value="12">3 X 4</option>
              <option value="16">4 X 4</option>
              <option value="20">4 X 5</option>
            </select>
          </div>

          <div class="form-group">
            <label>Tipe Aternatif</label>
            <select class="form-control" name="tipe_alternatif">
              <option value="putra">Putra</option>
              <option value="putri">Putri</option>
            </select>
          </div>

          <div class="form-group">
            <label>Fasilitas Kamar</label>
            <select class="form-control" name="fasilitas_kamar">
              @foreach($data_fk as $key=>$value)
              <option value="{{ $value->id }}">{{ $value->nama }}</option>
              @endforeach
            </select>
          </div>

          <div class="form-group">
            <label>Fasilitas Penunjang</label>
            <select class="form-control" name="fasilitas_penunjang">
              @foreach($data_fp as $key=>$value)
              <option value="{{ $value->id }}">{{ $value->nama }}</option>
              @endforeach
            </select>
          </div>

          <div class="form-group">
            <label>Fasilitas Lingkungan</label>
            <select class="form-control" name="fasilitas_lingkungan">
              @foreach($data_fl as $key=>$value)
              <option value="{{ $value->id }}">{{ $value->nama }}</option>
              @endforeach
            </select>
          </div>

          <div class="form-group">
            <label>Photo Kost</label><br>
            <input id="fotoUploader"type="file" name="file" class="form-control">
            <br>
            <img class="img-thumbnail" id="preview" alt="">
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
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>
@endsection