<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DssKost;
use Illuminate\Support\Facades\DB;
use App\DssFasilitasKamar;
use App\DssFasilitasPenunjang;
use App\DssFasilitasLingkungan;
use Illuminate\Support\Facades\File;

class KostController extends Controller
{
    public function detailKost(Request $request, $id)
    {
        $suggested_kost = DssKost::all()->random(3);

        $detail_kost = DssKost::where('id', $id)
            ->with('fasilitasKamar')
            ->with('fasilitasPenunjang')
            ->with('fasilitasLingkungan')
            ->first();

        /*
        2 * 3 = 6
        3 * 3 = 9
        3 * 4 = 12
        4 * 4 = 16 
        5 * 4 = 20
        */


        switch ($detail_kost->luas_kamar) {
            case 6:
                $detail_kost->luas_kamar = '2 x 3';
                break;
            case 9:
                $detail_kost->luas_kamar = '3 x 3';
                break;
            case 12:
                $detail_kost->luas_kamar = '3 x 4';
                break;
            case 16:
                $detail_kost->luas_kamar = '4 x 4';
                break;
            case 20:
                $detail_kost->luas_kamar = '4 x 5';
                break;
            default:
                $detail_kost->luas_kamar = 'tidak disebutkan';
                break;
        }

        return view('detail', [
            'detail_kost' => $detail_kost,
            'suggested_kost' => $suggested_kost
        ]);
    }
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

        return view('kost', ['kost' => $data_kost]);
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
        $nama_file = "/$tujuan_upload/" . time() . "_" . $file->getClientOriginalName();
        $file->move($tujuan_upload, $nama_file);


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

        return redirect('/admin/alternatif_kost');
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
        $file = $request->file('file');
        $nama_file = "";
        $tujuan_upload = 'uploads/img';

        if ($file) {

            $nama_file = "/$tujuan_upload/" . time() . "_" . $file->getClientOriginalName();
            $file->move($tujuan_upload, $nama_file);
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
        return redirect('/admin/alternatif_kost');
    }

    public function hapus($id)
    {

        $hapus_kost = DssKost::where('id', $id);
        $nama_file = DssKost::where('id', $id)->first()->foto;
        $public_path_file = public_path() . $nama_file;

        File::delete($public_path_file);
        $hapus_kost->delete();

        return redirect('/admin/alternatif_kost');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }
}
