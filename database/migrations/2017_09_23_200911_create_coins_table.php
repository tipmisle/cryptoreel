<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coins', function (Blueprint $table) {
            $table->string('id');
            $table->string('name');
            $table->string('symbol');
            $table->integer('rank');
            $table->decimal('price_usd', 11, 10);
            $table->decimal('price_btc', 11, 10);
            $table->decimal('24h_volume_usd', 15, 2);
            $table->decimal('market_cap_usd', 15, 2);
            $table->decimal('available_supply', 15, 2);
            $table->decimal('total_supply', 15, 2);
            $table->decimal('percent_change_1h', 4, 2);
            $table->decimal('percent_change_24h', 4, 2);
            $table->decimal('percent_change_7d', 4, 2);
            $table->integer('last_updated');
            $table->decimal('price_eur', 11, 10);
            $table->decimal('24h_volume_eur', 15, 2);
            $table->decimal('market_cap_eur', 15, 2);
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
