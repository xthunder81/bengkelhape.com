<?php

use App\detail_pegawai;
use Illuminate\Database\Seeder;

class DetailPegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        detail_pegawai::create([
            'pegawai_id' => '1',
            'bagian_id' => '1',
        ]);
    }
}
