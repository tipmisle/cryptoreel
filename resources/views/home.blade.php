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
        <div class="col col-lg-4">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </div>
    </div>
</div>
@endsection
