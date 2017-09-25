<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Requests;
use App\Coin;

class CoinController extends Controller
{
    public function populate() {
    	$response = Requests::get('https://api.coinmarketcap.com/v1/ticker/?convert=EUR');
    	$coins = json_decode($response->body, true);	
    	for ($i=0; $i < count($coins); $i++) { 
    		$c = Coin::where('id', '=', $coins[$i]['id'])->first();
            $c->id = $coins[$i]['id'];
            $c->name = $coins[$i]['name'];
    		$c->symbol = $coins[$i]['symbol'];
    		$c->rank = $coins[$i]['rank'];
    		$c->price_usd = $coins[$i]['price_usd'];
    		$c->price_btc = $coins[$i]['price_btc'];
    		$c->market_cap_usd = $coins[$i]['market_cap_usd'];
    		$c->available_supply = $coins[$i]['available_supply'];
    		$c->total_supply = $coins[$i]['total_supply'];
    		$c->percent_change_1h = $coins[$i]['percent_change_1h'];
    		$c->percent_change_24h = $coins[$i]['percent_change_24h'];
    		$c->percent_change_7d = $coins[$i]['percent_change_7d'];
    		$c->last_updated = $coins[$i]['last_updated'];
    		$c->price_eur = $coins[$i]['price_eur'];
    		$c->market_cap_eur = $coins[$i]['market_cap_eur'];
    		$c->save();
    	}
    }
}
