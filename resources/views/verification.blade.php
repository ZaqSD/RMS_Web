@extends('app')
@section('content')

<div class="container">
    <h1>Your Purchase was successfull! :)</h1>
    <div id="ticketBackground">
        <h2> {{ $tickets->ticNameOfPerson}}</h2>
    </div>
</div>
@endsection
