<?php

namespace App\Http\Controllers;

use App\DssKost;

use Illuminate\Http\Request;

class weightProductController extends Controller
{
    public function show()
    {
        return view('user');
    }
    public function calculate()
    {
        $data_kost = DssKost::with('fasilitasKamar')
            ->with('fasilitasPenunjang')
            ->with('fasilitasLingkungan')
            ->get();

        
    }
}
