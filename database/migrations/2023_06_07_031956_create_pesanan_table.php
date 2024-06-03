<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesanan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('meja_id');
            $table->string('nama_pemesan');
            $table->string('kode_pesanan')->nullable();
            $table->string('status');
            $table->bigInteger('total_pembayaran');
            $table->unsignedBigInteger('jenis_pembayaran_id');
            $table->timestamps();

            $table->foreign('meja_id')->references('id')->on('masterdata_daftar_meja');
            $table->foreign('jenis_pembayaran_id')->references('id')->on('masterdata_jenis_pembayaran');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesanan');
    }
}
