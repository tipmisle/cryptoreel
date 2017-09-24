@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col col-lg-8 my-coins">
            <h2>My coins</h2>
            <ul class="coins">
                <li class="coin">
                    <div class="row">
                        <div class="col col-lg-2 branding">
                            <img src="https://files.coinmarketcap.com/static/img/coins/32x32/neo.png">
                            <small>NEO</small>
                        </div>
                        <div class="col col-lg-8 holdings">
                            <p>11.34 <span>NEO</span></p>
                            <p>$523.42</p>
                        </div>
                        <div class="col col-lg-2 price">
                            <p>$14.04</p>
                        </div>
                        <div class="edit col-lg-2">
                            <ul>
                                <li>
                                    <p>Edit</p>
                                </li>
                                <li>
                                    <p>Delete</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="col col-lg-4 sidebar">
            <h2>My portfolio statistics</h2>
            <div class="statistics">
                <h3>$6323.63</h3>
            </div>
        </div>
    </div>
</div>
@endsection
