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
            "1" => "kamar mandi luar",
            "2" => "kamar mandi luar, tempat cuci dan jemur, parkiran",
            "3" => "kamar mandi luar, tempat cuci dan jemur, parkiran, dapur",
            "4" => "kamar mandi dalam, tempat cuci dan jemur, parkiran, dapur, tv bersama",
            "5" => "kamar mandi dalam, tempat cuci dan jemur, parkiran, dapur, tv bersama, kulkas"
        ];
        foreach ($fuzzyNumberLingkungan as $key => $value) {
            DB::table('dss_fasilitas_penunjangs')->insert([
                "nama" => $value,
                "nilai" => floatval($key)
            ]);
        }
    }
}
