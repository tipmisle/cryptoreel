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
            $table->decimal('buy_price_usd', 11, 10);
            $table->decimal('buy_price_btc', 11, 10);
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
