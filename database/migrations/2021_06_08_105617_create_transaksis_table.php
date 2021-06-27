<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_transaksi');
            $table->unsignedInteger('service_id');
            $table->string('no_transaksi');
            $table->date('tanggal_terima');
            $table->date('tanggal_selesai')->nullable();
            $table->string('nama_customer')->nullable();
            $table->string('alamat_customer', 100)->nullable();
            $table->string('telpon_customer', 15)->nullable();
            $table->string('merek')->nullable();
            $table->string('keluhan', 255)->nullable();
            $table->unsignedInteger('teknisi_id')->nullable();
            $table->unsignedInteger('admin_id')->nullable();
            $table->timestamps();

            $table->index("service_id");
            $table->index("teknisi_id");
            $table->index("admin_id");

            $table->foreign('service_id')
                ->references('id_service')->on('service')
                ->onDelete('no action')
				->onUpdate('no action');

            $table->foreign('teknisi_id')
                ->references('id_pegawai')->on('pegawai')
                ->onDelete('no action')
				->onUpdate('no action');

            $table->foreign('admin_id')
                ->references('id_pegawai')->on('pegawai')
                ->onDelete('no action')
				->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi');
    }
}
