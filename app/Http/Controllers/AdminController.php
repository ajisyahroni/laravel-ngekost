<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }

    public function alternatif_kost(){
        // mengambil data dari table dss_kosts
        $data_kosts = DB::table('dss_kosts')->get();

        // mengirim data kost ke view alternatif_kost
        return view('admin/alternatif_kost',['dss_kosts' => $data_kosts]);

    }

    public function profil(){
        return view('admin.profil');
    }
}
