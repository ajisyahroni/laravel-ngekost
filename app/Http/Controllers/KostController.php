<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DssKost;

class KostController extends Controller
{
    public function detailKost(Request $request, $id)
    {

        $detail_kost = DssKost::where('id', $id)
            ->with('fasilitasKamar')
            ->with('fasilitasPenunjang')
            ->with('fasilitasLingkungan')
            ->first();

        return view('detail', ['detail_kost' => $detail_kost]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        //
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
