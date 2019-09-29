<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('seat_id');
            $table->dateTime('begin');
            $table->dateTime('end');
            $table->enum('checkout', ['سفارش باز','سفارش باز','پرداخت نقدی','پرداخت بانکی','پرداخت کیف پول']);
            $table->string('transactionID');
            $table->integer('sum');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('seat_id')->references('id')->on('seats');
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
        Schema::dropIfExists('orders');
    }
}
