<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyCoin extends Model
{
    protected $table = "mycoins";
    protected $fillable = ["coin_name", "user_id", "buy_price_usd", "buy_price_eur"];
}
