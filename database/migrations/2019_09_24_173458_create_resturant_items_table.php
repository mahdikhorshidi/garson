<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResturantItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resturant_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->unsignedBigInteger('item_id');
            $table->unsignedBigInteger('resturant_id');
            $table->integer('price');
            $table->text('detail');
            $table->string('thumb')->default('/images/defautl/categoty.jpg');
            $table->foreign('item_id')->references('id')->on('items');
            $table->foreign('resturant_id')->references('id')->on('resturants');
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
        Schema::dropIfExists('resturant_items');
    }
}
