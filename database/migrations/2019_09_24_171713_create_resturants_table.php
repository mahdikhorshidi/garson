<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResturantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resturants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('location')->nullable()->default(NULL);
            $table->string('adrs')->nullable()->default(NULL);
            $table->string('tell')->nullable()->default(NULL);
            $table->text('detail')->nullable()->default(NULL);
            $table->string('thumb')->default('/images/defautl/resturant.jpg');
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
        Schema::dropIfExists('resturants');
    }
}
