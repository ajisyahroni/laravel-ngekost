<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class kostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = File::get("database/json/kost.json");
        $arrayOfKosts = json_decode($data);

        foreach ($arrayOfKosts as $obj) {
            DB::table('dss_kosts')->insert([
                "nama" => $obj->nama,
                "harga" => intval($obj->harga),
                "jarak" => intval($obj->jarak),
                "luas_kamar" => intval($obj->luas_kamar),
                "foto" => $obj->foto,
                "tipe" => $obj->tipe,
                "id_fasilitas_kamar" => intval($obj->id_fasilitas_kamar),
                "id_fasilitas_penunjang" => intval($obj->id_fasilitas_penunjang),
                "id_fasilitas_lingkungan" => intval($obj->id_fasilitas_lingkungan)
            ]);
        }
    }
}
