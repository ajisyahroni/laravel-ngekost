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
    public function fuzzyForDistance($distance)
    {
        $distanceValue = 0;
        if ($distance <= 500) {
            $distanceValue = 5;
        } else if ($distance > 500 && $distance <= 750) {
            $distanceValue = 4;
        } else if ($distance > 750 && $distance <= 1000) {
            $distanceValue = 3;
        } else if ($distance > 1000 && $distance <= 1500) {
            $distanceValue = 2;
        } else {
            $distanceValue = 1;
        }
        return $distanceValue;
    }

    public function fuzzyForPrice($price)
    {
        $value = 0;
        if ($price <= 250) {
            $value = 5;
        } else if ($price > 250 && $price <= 500) {
            $value = 4;
        } else if ($price > 500 && $price <= 750) {
            $value = 3;
        } else if ($price > 750 && $price <= 1000) {
            $value = 2;
        } else {
            $value = 1;
        }
        return $value;
    }

    public function index(Request $req)
    {
        $arrayOfWeight = [];
        $arrayOfRequest = ['tipe', 'harga', 'jarak', 'luasKamar', 'fasilitasKamar', 'fasilitasPenunjang', 'fasilitasLingkungan'];
        if ($req->has($arrayOfRequest)) {
            $arrayOfWeight = [
                intval($req->harga),
                intval($req->jarak),
                intval($req->luasKamar),
                intval($req->fasilitasKamar),
                intval($req->fasilitasPenunjang),
                intval($req->fasilitasLingkungan)
            ];
        } else {
            $arrayOfWeight = [3, 3, 3, 3, 3, 3];
        }



        $data_kost = [];

        $tipe = $req->tipe;
        if ($tipe == 'putra') {
            $data_kost = DssKost::where('tipe', 'putra')
                ->with('fasilitasKamar')
                ->with('fasilitasPenunjang')
                ->with('fasilitasLingkungan')
                ->get();
        } else if ($tipe == 'putri') {
            $data_kost = DssKost::where('tipe', 'putri')
                ->with('fasilitasKamar')
                ->with('fasilitasPenunjang')
                ->with('fasilitasLingkungan')
                ->get();
        } else {
            $data_kost = DssKost::with('fasilitasKamar')
                ->with('fasilitasPenunjang')
                ->with('fasilitasLingkungan')
                ->get();
        }


        // // ARRAY BOBOT
        // $arrayOfWeight = [5, 5, 4, 3, 2, 5];
        // passed
        $sumOfWeight = array_sum($arrayOfWeight);


        // NORMALISASI BOBOT
        // passed
        $normalizedWeight = [];
        foreach ($arrayOfWeight as $key => $value) {
            $dividedBySum = $value / $sumOfWeight;
            array_push($normalizedWeight, $dividedBySum);
        }

        // CALCULATE THE VECTOR OF S VALUE
        // passed
        foreach ($data_kost as $key => $value) {

            // COST
            $harga =  pow($this->fuzzyForPrice($value->harga), -1 * $normalizedWeight[0]);
            $jarak =  pow($this->fuzzyForDistance($value->jarak), -1 * $normalizedWeight[1]);
            // BENEFIT
            $luas_kamar = pow($value->luas_kamar, $normalizedWeight[2]);
            $fasilitas_kamar = pow($value->fasilitasKamar->nilai, $normalizedWeight[3]);
            $fasilitas_penunjang = pow($value->fasilitasPenunjang->nilai, $normalizedWeight[4]);
            $fasilitas_lingkungan = pow($value->fasilitasLingkungan->nilai, $normalizedWeight[5]);

            $value['vectorS'] = $harga * $jarak * $luas_kamar * $fasilitas_kamar * $fasilitas_penunjang * $fasilitas_lingkungan;
        }

        // SIGMA VECTOR
        // passed
        $sigmaVector = 0;
        foreach ($data_kost as $key => $value) {
            $sigmaVector += $value->vectorS;
        }

        // CALCULATE vector value
        // passed
        foreach ($data_kost as $key => $value) {
            $value['vectorValue'] = $value->vectorS / $sigmaVector;
        }


        $arrayOfKost = $data_kost->toArray();
        $collection = collect($arrayOfKost);
        $sorted = $collection->sortByDesc('vectorValue')->values()->all();


        $runnerUp = collect($sorted)->take(2);
        $generalKost = collect($sorted)->splice(2);



        return view('recomendation', [
            'runner' => $runnerUp,
            'kost' => $generalKost
        ]);
    }
}
