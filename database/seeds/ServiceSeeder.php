<?php

use Illuminate\Database\Seeder;
use App\service;
class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        service::create([
            'nama_service' => 'Handphone',
            'kode_service' => 'HP',
        ]);
    }
}
