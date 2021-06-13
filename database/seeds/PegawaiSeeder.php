<?php

use Illuminate\Database\Seeder;
use App\pegawai;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        pegawai::create([
            'username' => 'admin',
            'password' => bcrypt('admin'),
            'nama_pegawai' => 'admin',
            'jenis_kelamin' => 'Laki-laki',
            'tanggal_lahir' => Carbon::parse('1990/01/01'),
            'tanggal_masuk' => Carbon::parse('2021/01/01'),
            'alamat_pegawai' => 'Jl. Kedendeng',
            'kelurahan_pegawai' => 'Kedendeng',
            'kecamatan_pegawai' => 'Kedendeng',
            'kabupaten_pegawai' => 'Sidoarjo',
            'provinsi_pegawai' => 'Jawa Timur',
            'telpon_pegawai' => '+6281122334455',
        ]);
    }
}
