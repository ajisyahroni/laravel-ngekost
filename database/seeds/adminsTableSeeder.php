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
        DB::table('dss_admins')->insert([
            "nama" => "admin",
            "email" => "admin@gmail.com",
            "password" => "root",
            "foto" => "/sbadmin/img/ryan_logo.jpg"
        ]);
    }
}
