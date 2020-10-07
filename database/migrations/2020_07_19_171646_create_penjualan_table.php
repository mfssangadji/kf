<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenjualanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjualan', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('obat_id')->unsigned();
            $table->foreign('obat_id')->references('id')->on('obat')->onDelete('cascade');
            $table->bigInteger('apotik_id')->unsigned();
            $table->foreign('apotik_id')->references('id')->on('apotik')->onDelete('cascade');
            $table->bigInteger('jumlah');
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
        Schema::dropIfExists('penjualan');
    }
}
