@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col col-lg-8 my-coins">
            <h2>My coins</h2>
            <MyCoins></MyCoins>
        </div>
        <div class="col col-lg-4 sidebar">
            <h2>My portfolio statistics</h2>
            <div class="statistics">
                <h3>${{Auth::user()->portfolio->last()->portfolio_worth}}</h3>
            </div>
        </div>
    </div>
</div>
@endsection
