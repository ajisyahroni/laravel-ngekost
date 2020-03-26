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
        if ($distance < 500) {
            $distanceValue = 1;
        } else if ($distance > 500 && $distance <= 750) {
            $distanceValue = 0.75;
        } else if ($distance > 750 && $distance <= 1000) {
            $distanceValue = 0.50;
        } else if ($distance > 1000 && $distance <= 1500) {
            $distanceValue = 0.25;
        } else {
            $distanceValue = 0;
        }
        return $distanceValue;
    }

    public function fuzzyForPrice($price)
    {
        $value = 0;
        if ($price < 250) {
            $value = 1;
        } else if ($price > 250 && $price <= 500) {
            $value = 0.75;
        } else if ($price > 500 && $price <= 750) {
            $value = 0.50;
        } else if ($price > 750 && $price <= 1000) {
            $value = 0.25;
        } else {
            $value = 0;
        }
        return $value;
    }

    public function index()
    {
        $data_kost = DssKost::with('fasilitasKamar')
            ->with('fasilitasPenunjang')
            ->with('fasilitasLingkungan')
            ->get();


        // ARRAY BOBOT
        $arrayOfWeight = [5, 5, 4, 3, 2, 5];
        $sumOfWeight = array_sum($arrayOfWeight);


        // NORMALISASI BOBOT
        $normalizedWeight = [];
        foreach ($arrayOfWeight as $key => $value) {
            $dividedBySum = $value / $sumOfWeight;
            array_push($normalizedWeight, $dividedBySum);
        }

        // CALCULATE THE VECTOR OF S VALUE

        foreach ($data_kost as $key => $value) {

            // COST
            $harga = -1 * pow($this->fuzzyForPrice($value->harga), $normalizedWeight[0]);
            $jarak = -1 * pow($this->fuzzyForDistance($value->jarak), $normalizedWeight[1]);
            // BENEFIT
            $luas_kamar = pow($value->luas_kamar, $normalizedWeight[2]);
            $fasilitas_kamar = pow($value->fasilitasKamar->nilai, $normalizedWeight[3]);
            $fasilitas_penunjang = pow($value->fasilitasPenunjang->nilai, $normalizedWeight[4]);
            $fasilitas_lingkungan = pow($value->fasilitasLingkungan->nilai, $normalizedWeight[5]);

            $value['vectorS'] = $harga * $jarak * $luas_kamar * $fasilitas_kamar * $fasilitas_penunjang * $fasilitas_lingkungan;
        }

        // SIGMA VECTOR
        $sigmaVector = 0;
        foreach ($data_kost as $key => $value) {
            $sigmaVector += $value->vectorS;
        }

        // CALCULATE vector value
        foreach ($data_kost as $key => $value) {
            $value['vectorValue'] = $value->vectorS / $sigmaVector;
        }


        $arrayOfKost = $data_kost->toArray();
        $collection = collect($arrayOfKost);
        $sorted = $collection->sortByDesc('vectorValue')->values()->all();

        // $collectionOfKost->sortBy('harga');
        // var_dump($collectionOfKost);



        $res = [
            'status' => 200,
            'bobot normal' => $normalizedWeight,
            'sigma bobot' => $sumOfWeight,
            'sigma vector' => $sigmaVector,
            'data' => $sorted
        ];

        $runnerUp = collect($sorted)->take(2);
        $generalKost = collect($sorted)->splice(3);


        return view('recomendation', [
            'runner' => $runnerUp,
            'kost' => $generalKost
        ]);
    }
}
