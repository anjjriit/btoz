<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkrdTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        // Creates the users table
        Schema::create('skrd', function ($table) {
            $table->increments('id');
            $table->string('nomor_urut');
            $table->string('nama_retribusi');
            $table->text('alamat_retribusi');
            $table->string('jenis_retribusi');
            $table->text('alamat_obyek');
            $table->string('nomor_obyek');
            $table->string('npwrd')->nullable();
            $table->integer('tahun');
            $table->integer('njop');
            $table->integer('persen_retribusi');
            $table->integer('nominal_retribusi');
            $table->integer('denda_retribusi');
            $table->integer('total_retribusi');
            $table->date('jatuh_tempo');
            $table->date('tanggal_surat');
            $table->timestamps();
            $table->softDeletes();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('skrd');
	}

}
