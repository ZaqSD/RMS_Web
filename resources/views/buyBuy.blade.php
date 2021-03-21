@extends('app')
@section('content')

<div class="container">
    @isset($tickets)
    <h1>Purchase successfull!</h1>
    <div class="col-lg">
        <div class="col-lg"></div>
        <h3><b>IC1-{{ $tickets->linId }}</b></h3>
        <h4>{{ $tickets->ticStart }} -> {{ $tickets->ticDestination}}</h4>
        <div class="filler-20"></div>
        <h4>{{ $tickets->ticNameOfPerson }}</h4>
        <div class="filler-20"></div>
        <h3><b>Time of Purchase : </b></h3>
        <h4><?php echo now()?></h4>
    </div>
    <div class="row">
        <a class="col-lg cBtnPrimary" id="buyBuyBtn2" href="/">Home</a>
        <div class="col-lg"></div>
    </div>
    @endisset
</div>
</div>
@endsection
