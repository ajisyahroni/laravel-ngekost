<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DssKost;
use App\DssFasilitasKamar;


class KostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard(){
        return view('admin/dashboard');
    }

    public function showallAlternatif()
    {
        $data_kost = DssKost::get();
        $data_fasilitasKamar = DssFasilitasKamar::get();
        return view('admin/alternatif_kost', ['data_kosts' => $data_kost, 'data_fk' => $data_fasilitasKamar]);
    }

    public function tambah()
    {
        return 'berhasil ditambah';
    }

    public function index()
    {
        $data_kost = DssKost::get();
        return view('kost', ['kost' => $data_kost]);
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $data_kost = DssKost::get($id);
        dd($data_kost);

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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
