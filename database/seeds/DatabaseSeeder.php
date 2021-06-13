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
        // $this->call(UsersTableSeeder::class);
        $this->call(PegawaiSeeder::class);
        $this->call(BagianSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(DetailPegawaiSeeder::class);
    }
}
