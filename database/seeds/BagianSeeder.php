<?php

use Illuminate\Database\Seeder;
use App\bagian;

class BagianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        bagian::create([
            'nama_bagian' => 'Pemilik',
            'kode_bagian' => 'PMK',
        ]);

        bagian::create([
            'nama_bagian' => 'Administrasi',
            'kode_bagian' => 'ADM',
        ]);

        bagian::create([
            'nama_bagian' => 'Teknisi',
            'kode_bagian' => 'TKS',
        ]);
    }
}
