<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $table = "portfolio_stats";
    protected $fillable = ["user_id", "portfolio_worth"];
}
