<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_transaksi', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_detail_transaksi');
            $table->unsignedInteger('transaksi_id');
            $table->string('berita', 255)->nullable();
            $table->string('item')->nullable();
            $table->integer('harga')->nullable();
            $table->string('status_transaksi')->nullable();
            $table->timestamps();

            $table->index("transaksi_id");

            $table->foreign('transaksi_id')
                ->references('id_transaksi')->on('transaksi')
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
        Schema::dropIfExists('detail_transaksi');
    }
}
