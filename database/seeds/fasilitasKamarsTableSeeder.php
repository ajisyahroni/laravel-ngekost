<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class fasilitasKamarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fuzzyNumberKamar = [
            "0" => "kasur",
            "0.25" => "kasur, lemari",
            "0.5" => "kasur, lemari, meja belajar",
            "0.75" => "kasur, lemari, wifi, meja belajar",
            "1" => "kasur, lemari, wifi, meja belajar, AC"
        ];
        foreach ($fuzzyNumberKamar as $key => $value) {
            DB::table('dss_fasilitas_kamars')->insert([
                "nama" => $value,
                "nilai" => floatval($key),
                "created_at" => date("Y-m-d H:i:s")
            ]);
        }
    }
}
