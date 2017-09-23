<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMycoinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mycoins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('coin_name');
            $table->integer('user_id');
            $table->decimal('buy_price_usd', 10, 5);
            $table->decimal('buy_price_btc', 10, 5);
            $table->foreign('user_id')->references('id')->on('users');
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
        //
    }
}
