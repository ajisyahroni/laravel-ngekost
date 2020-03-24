<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DssKost;
use Illuminate\Support\Facades\DB;
use App\DssFasilitasKamar;
use App\DssFasilitasPenunjang;
use App\DssFasilitasLingkungan;

class KostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        return view('admin/dashboard');
    }

    public function showallAlternatif()
    {
        $data_kost = DssKost::get();
        $data_fasilitasKamar = DssFasilitasKamar::get();
        $data_fasilitasPenunjang = DssFasilitasPenunjang::get();
        $data_fasilitasLingkungan = DssFasilitasLingkungan::get();
        return view(
            'admin/alternatif_kost',
            [
                'data_kosts' => $data_kost,
                'data_fk' => $data_fasilitasKamar,
                'data_fp' => $data_fasilitasPenunjang,
                'data_fl' => $data_fasilitasLingkungan,
            ]
        );
    }

    public function index()
    {
        $data_kost = DssKost::with('fasilitasKamar')
            ->with('fasilitasPenunjang')
            ->with('fasilitasLingkungan')
            ->get();


        return response()->json(['status' => 200, 'data' => $data_kost]);
        // return view('kost', ['kost' => $data_kost]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return 'berhasil ditambah';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // upload gambar
        $file = $request->file('file');

        $tujuan_upload = 'uploads/img';

        if ($request->tipe_alternatif == 'Putra') {
            $nama_file = "/$tujuan_upload/putra/" . time() . "_" . $file->getClientOriginalName();
            $file->move($tujuan_upload, $nama_file);
        } else {
            $nama_file = "/$tujuan_upload/putri/" . time() . "_" . $file->getClientOriginalName();
            $file->move($tujuan_upload, $nama_file);
        };


        DB::table('dss_kosts')->insert([
            'nama' => $request->nama_kost,
            'harga' => $request->harga_kost,
            'jarak' => $request->jarak_kost,
            'luas_kamar' => $request->luas,
            'foto' => $nama_file,
            'tipe' => $request->tipe_alternatif,
            'id_fasilitas_kamar' => $request->fasilitas_kamar,
            'id_fasilitas_penunjang' => $request->fasilitas_penunjang,
            'id_fasilitas_lingkungan' => $request->fasilitas_lingkungan
        ]);

        return redirect('/alternatif_kost');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fasilitasKamar = DssFasilitasKamar::get();
        $fasilitasPenunjang = DssFasilitasPenunjang::get();
        $fasilitasLingkungan = DssFasilitasLingkungan::get();

        $edit_kost = DssKost::where('id', $id)
            ->with('fasilitasKamar')
            ->with('fasilitasPenunjang')
            ->with('fasilitasLingkungan')
            ->first();

        $data = [
            'kost' => $edit_kost,
            'fasilitasKamar' => $fasilitasKamar,
            'fasilitasPenunjang' => $fasilitasPenunjang,
            'fasilitasLingkungan' => $fasilitasLingkungan
        ];
        return view('admin/edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        echo $request->nama_kost;
        echo $request->harga_kost;
        echo $request->jarak_kost;
        echo $request->luas_kost;
        echo $request->tipe_alternatif;
        echo $request->fasilitas_kamar;
        echo $request->fasilitas_penunjang;
        echo $request->fasilitas_lingkungan;
        $file = $request->file('file');

        echo $id;
        $nama_file = "";
        $tujuan_upload = 'uploads/img';

        // JIKA ADMIN MELAKUKAN UPDATE FOTO
        if ($file) {
            if ($request->tipe_alternatif == 'Putra') {
                $nama_file = "/$tujuan_upload/putra/" . time() . "_" . $file->getClientOriginalName();
                $file->move($tujuan_upload, $nama_file);
            } else {
                $nama_file = "/$tujuan_upload/putri/" . time() . "_" . $file->getClientOriginalName();
                $file->move($tujuan_upload, $nama_file);
            };
        }

        $updated = DB::table('dss_kosts')->where('id', $id)->first();
        DB::table('dss_kosts')->where('id', $id)->update([
            "nama" => $request->nama_kost ? $request->nama_kost  : $updated->nama,
            "harga" => $request->harga_kost ? $request->harga_kost  : $updated->harga,
            "jarak" => $request->jarak_kost ? $request->jarak_kost  : $updated->jarak,
            "luas_kamar" => $request->luas_kost ? $request->luas_kost  : $updated->luas_kamar,
            "foto" => $nama_file != "" ? $nama_file : $updated->foto,
            "tipe" => $request->tipe_alternatif ? $request->tipe_alternatif  : $updated->tipe,
            "id_fasilitas_kamar" => $request->fasilitas_kamar ? $request->fasilitas_kamar  : $updated->id_fasilitas_kamar,
            "id_fasilitas_penunjang" => $request->fasilitas_penunjang ? $request->fasilitas_penunjang  : $updated->id_fasilitas_penunjang,
            "id_fasilitas_lingkungan" => $request->fasilitas_lingkungan ? $request->fasilitas_lingkungan  : $updated->id_fasilitas_lingkungan,
        ]);
    }

    public function hapus($id)
    {
        $hapus_kost = DssKost::where('id', $id);
        $hapus_kost->delete();

        return redirect('/alternatif_kost');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    { }
}
