<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasiens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('no_asuransi');
            $table->string('perusahaan_asuransi');
            $table->string('nik');
            $table->string('no_rekam_medis');
            $table->string('nama');
            $table->string('jenis_kelamin');
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->text('alamat');
            $table->string('no_hp');
            $table->string('no_wa');
            $table->string('gol_darah');
            $table->string('alergi_obat');
            $table->string('alergi_makanan');
            $table->string('resiko_medis');
            $table->string('berat_badan');
            $table->string('tinggi_badan');
            $table->string('barcode_link')->nullable();;
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
        Schema::dropIfExists('pasiens');
    }
}
