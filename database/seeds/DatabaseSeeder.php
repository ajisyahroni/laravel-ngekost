<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(fasilitasKamarsTableSeeder::class);
        $this->call(fasilitasPenunjangsTableSeeder::class);
        $this->call(fasilitasLingkungansTableSeeder::class);
        $this->call(kostsTableSeeder::class);
        $this->call(adminsTableSeeder::class);
    }
}
