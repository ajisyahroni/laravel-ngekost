<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class adminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        // jika anda memasukan data password tanpa di enkripsi bcrypt maka laravel tidak bisa mencocokan password yang anda inputkan dengan password yang ada pada database 
        // perilaku default dari laravel adalah mencocokan password yang anda inputkan dengan hasil enkripsi yang sudah dibuat
        // laravel mengenkripsi data password dengan bantuan bcrypt, setelah melakukan migrasi maka anda dapat cek pada tabel dss admin pada phpmyadmin 
        // maka password akan dienkripsi
        // keuntungan menggunakan password dienkripsi ini adalah lebih aman tidak ada yang tahu apapun password yang anda tuliskan pada tabel database
        
        DB::table('dss_admins')->insert([
            "nama" => "admin",
            "email" => "ryan.nugroho@students.amikom.ac.id",
            "password" => bcrypt("root"),
            "foto" => "/sbadmin/img/ryan_logo.jpg"
        ]);
    }
}
