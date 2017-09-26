<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coin;
use App\MyCoin;
use App\Portfolio;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function myCoins() {
    	$coins = MyCoin::where('user_id', '=', Auth::user()->id)->get();
    	return response()->json(['coins' => $coins]);
    }
}
