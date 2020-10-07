<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupplyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supply', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('obat_id')->unsigned();
            $table->foreign('obat_id')->references('id')->on('obat')->onDelete('cascade');
            $table->bigInteger('apotik_id')->unsigned();
            $table->foreign('apotik_id')->references('id')->on('apotik')->onDelete('cascade');
            $table->bigInteger('stok');
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
        Schema::dropIfExists('supply');
    }
}
