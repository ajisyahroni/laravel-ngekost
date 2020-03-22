<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class fasilitasPenunjangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fuzzyNumberLingkungan = [
            "0" => "kamar mandi luar",
            "0.25" => "kamar mandi luar, tempat cuci dan jemur, parkiran",
            "0.5" => "kamar mandi luar, tempat cuci dan jemur, parkiran, dapur",
            "0.75" => "kamar mandi dalam, tempat cuci dan jemur, parkiran, dapur, tv bersama",
            "1" => "kamar mandi dalam, tempat cuci dan jemur, parkiran, dapur, tv bersama, kulkas"
        ];
        foreach ($fuzzyNumberLingkungan as $key => $value) {
            DB::table('dss_fasilitas_penunjangs')->insert([
                "nama" => $value,
                "nilai" => floatval($key),
                "created_at" => date("Y-m-d H:i:s")
            ]);
        }
    }
}
