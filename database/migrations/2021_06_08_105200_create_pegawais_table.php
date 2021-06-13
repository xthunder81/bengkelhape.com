<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai', function (Blueprint $table) {
            $table->increments('id_pegawai');
			$table->string('username')->unique();
			$table->string('password')->nullable();
			$table->string('nama_pegawai')->nullable();
			$table->string('jenis_kelamin',20)->nullable();
			$table->date('tanggal_lahir')->nullable();
			$table->date('tanggal_masuk')->nullable();
			$table->string('alamat_pegawai')->nullable();
			$table->string('kelurahan_pegawai',30)->nullable();
			$table->string('kecamatan_pegawai',30)->nullable();
			$table->string('kabupaten_pegawai',30)->nullable();
			$table->string('provinsi_pegawai',30)->nullable();
			$table->string('telpon_pegawai',15)->nullable();
            $table->boolean('status_pegawai')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pegawai');
    }
}
