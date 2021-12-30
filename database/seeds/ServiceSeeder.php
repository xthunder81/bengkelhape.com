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

        service::create([
            'nama_service' => 'Komputer',
            'kode_service' => 'PC',
        ]);

        service::create([
            'nama_service' => 'Laptop',
            'kode_service' => 'LTP',
        ]);

        service::create([
            'nama_service' => 'Printer',
            'kode_service' => 'PRN',
        ]);
    }
}
