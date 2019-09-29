<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeatFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seat_features', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('seat_id');
            $table->unsignedBigInteger('feature_id');
            $table->integer('value');
            $table->foreign('seat_id')->references('id')->on('seats');
            $table->foreign('feature_id')->references('id')->on('features');
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
        Schema::dropIfExists('seat_features');
    }
}
