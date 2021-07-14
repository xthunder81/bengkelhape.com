<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailPegawaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_pegawai', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_detail_pegawai');
			$table->unsignedInteger('pegawai_id');
			$table->unsignedInteger('bagian_id');
            $table->string('kode_pegawai')->nullable();
            $table->timestamps();

			$table->index("pegawai_id");
			$table->index(["bagian_id"], 'fk_bagian_pegawai_idx');

			$table->foreign('pegawai_id')
				->references('id_pegawai')->on('pegawai')
				->onDelete('no action')
                ->onUpdate('no action');

			$table->foreign('bagian_id', 'fk_bagian_pegawai_idx')
				->references('id_bagian')->on('bagian')
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
        Schema::dropIfExists('detail_pegawai');
    }
}
