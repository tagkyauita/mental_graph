<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiscriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discription', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('karte_id');
            $table->string('discription');
            $table->timestamps();

            $table->foreign('karte_id')->references('id')->on('karten')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('discription');
    }
}
