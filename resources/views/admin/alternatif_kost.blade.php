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
                              
                                          <th>Nama Kost</th>
                                          <th>Harga (/bulan)</th>
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
                                    @foreach($data_kosts as $kost)
                                    <tr>
                                          <td>{{ $kost->nama}}</td>
                                          <td>{{ $kost->harga}}</td>
                                          <td>{{ $kost->jarak}}</td>
                                          <td>{{ $kost->luas_kamar}}</td>
                                          <td><img width="60px" src="{{ $kost->foto }}"></td>
                                          <td>{{ $kost->tipe}}</td>
                                          <td>{{ $kost->id_fasilitas_kamar}}</td>
                                          <td>{{ $kost->id_fasilitas_penunjang}}</td>
                                          <td>{{ $kost->id_fasilitas_lingkungan}}</td>
                                          <td>
                                          <a href="/alternatif_kost/edit/{{ $kost->id }}" class="btn btn-primary btn-sm" ><i class=" fa fa-edit"></i></a>
                                          <a href="/alternatif_kost/hapus/{{ $kost->id }}" class="btn btn-danger btn-sm" ><i class=" fa fa-trash"></i></a>
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
      <form action="/alternatif_kost/tambah" method="POST">
      @csrf
          <div class="form-group">
            <label>Nama Alternatif</label>
            <input type="text" name="Nama" class="form-control">
          </div>

          <div class="form-group">
            <label>Harga (/Bulan)</label>
            <input type="text" name="Harga" class="form-control">
          </div>

          <div class="form-group">
            <label>Jarak ke AMIKOM (m)</label>
            <input type="text" name="Jarak" class="form-control">
          </div>

          <div class="form-group">
            <label>Luas Kamar (m2)</label>
            <input type="text" name="Luas_kamar" class="form-control">
          </div>

          <div class="form-group">
            <label>Tipe Aternatif</label>
            <select class="form-control" name="Tipe_Alternatif">
              <option>Putra</option>
              <option>Putri</option>
            </select>
          </div>

          
          <div class="form-group">
            <label>Fasilitas Penunjang</label>
            <select class="form-control" name="fasilitas_penunjang">
              <option>Putra</option>
              <option>Putri</option>
            </select>

          </div>
          
          <div class="form-group">
            <label>Fasilitas Lingkungan</label>
            <select class="form-control" name="fasilitas_lingkungan">
              <option>Putra</option>
              <option>Putri</option>
            </select>

          </div>

          <div class="form-group">
            <label>Photo Kost</label><br>
            <input type="file" name="Gambar" class="form-control">
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