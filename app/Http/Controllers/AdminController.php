<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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

    public function loginView(Request $request){
        return view('admin.profil');
    }
    

    public function login(Request $request){

    $credentials = $request->only('email', 'password');

    var_dump(Auth::guard('admin')->attempt($credentials));

    // if (Auth::guard('admin')->attempt($credentials)){
    //     return redirect()->route('dashboard.admin.view');
    // }else{
    //     return redirect()->back()->withErrors(['cek kembali email dan password']);
    // }
    }

    
}
