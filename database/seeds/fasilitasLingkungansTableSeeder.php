<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class fasilitasLingkungansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fuzzyNumberLingkungan = [
            "1" => "fasilitas ibadah",
            "2" => "fasilitas ibadah, fasilitas sandang pangan",
            "3" => "fasilitas ibadah, fasilitas sandang pangan, fasilitas pendidikan",
            "4" => "fasilitas ibadah, fasilitas sandang pangan, fasilitas pendidikan, fasilitas kesehatan",
            "5" => "fasilitas ibadah, fasilitas sandang pangan, fasilitas pendidikan, fasilitas kesehatan, transportasi umum"
        ];
        foreach ($fuzzyNumberLingkungan as $key => $value) {
            DB::table('dss_fasilitas_lingkungans')->insert([
                "nama" => $value,
                "nilai" => floatval($key)
            ]);
        }
    }
}
