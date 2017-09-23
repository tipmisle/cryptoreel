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
            $table->decimal('price_usd', 10, 5);
            $table->decimal('price_btc', 10, 5);
            $table->decimal('24h_volume_usd', 10, 5);
            $table->decimal('market_cap_usd', 10, 5);
            $table->decimal('available_supply', 10, 5);
            $table->decimal('total_supply', 10, 5);
            $table->decimal('percent_change_1h', 10, 5);
            $table->decimal('percent_change_24h', 10, 5);
            $table->decimal('percent_change_7d', 10, 5);
            $table->integer('last_updated');
            $table->decimal('price_eur', 10, 5);
            $table->decimal('24h_volume_eur', 10, 5);
            $table->decimal('market_cap_eur', 10, 5);
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
