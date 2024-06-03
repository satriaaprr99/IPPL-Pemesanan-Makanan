<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatusWaitersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('status_waiters', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_waiters');
            $table->unsignedBigInteger('id_pesanan');
            $table->string('status');
            $table->timestamps();

            $table->foreign('id_waiters')->references('id')->on('waiters');
            $table->foreign('id_pesanan')->references('id')->on('pesanan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('status_waiters');
    }
}
