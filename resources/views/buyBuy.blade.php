@extends('app')
@section('content')

<div class="container">
    <h1>Confirm Information</h1>
    <div class="col-lg">
        <div class="col-lg"></div>
        <h3>Name:</h3><br>
        <p></p>
        <h3>Route:</h3><br>
        <p>{{ $results->linId }}</p>
        <div class="row">
            <a class="col-lg cBtnPrimary" id="buyBuyBtn" href="/tickets/select/buy"><b>Buy for 4.90 CHF</b></a>
            <div class="col-lg"></div>
        </div>
    </div>
</div>
@endsection
