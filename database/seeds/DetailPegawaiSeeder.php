<?php

use App\bagian;
use App\detail_pegawai;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Type\Integer;

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
        $invoice_number = 0;

        $dp = detail_pegawai::create([
            'pegawai_id' => '1',
            'bagian_id' => '1',
            'kode_pegawai' => (str_pad($invoice_number + 1, 5, '0', STR_PAD_LEFT)),
        ]);


    }
}
