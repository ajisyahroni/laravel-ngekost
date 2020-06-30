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
            "1" => "kasur",
            "2" => "kasur, lemari",
            "3" => "kasur, lemari, meja belajar",
            "4" => "kasur, lemari, wifi, meja belajar",
            "5" => "kasur, lemari, wifi, meja belajar, AC"
        ];
        foreach ($fuzzyNumberKamar as $key => $value) {
            DB::table('dss_fasilitas_kamars')->insert([
                "nama" => $value,
                "nilai" => floatval($key)
            ]);
        }
    }
}
