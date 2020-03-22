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
            "0" => "fasilitas ibadah",
            "0.25" => "fasilitas ibadah, fasilitas sandang pangan",
            "0.5" => "fasilitas ibadah, fasilitas sandang pangan, fasilitas pendidikan",
            "0.75" => "fasilitas ibadah, fasilitas sandang pangan, fasilitas pendidikan, fasilitas kesehatan",
            "1" => "fasilitas ibadah, fasilitas sandang pangan, fasilitas pendidikan, fasilitas kesehatan, transportasi umum"
        ];
        foreach ($fuzzyNumberLingkungan as $key => $value) {
            DB::table('dss_fasilitas_lingkungans')->insert([
                "nama" => $value,
                "nilai" => floatval($key)
            ]);
        }
    }
}
