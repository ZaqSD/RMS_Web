@extends('app')
@section('content')

<div class="container">
    <h1>Add Information</h1>
    <div class="col-lg">
        <form method="POST" action="/tickets/select/buy">
            @csrf
            <div class="container">
                <div class="row">
                    <div class="col-lg">
                        <label class="form" for="buyName"><b>Name</b></label>
                        <input type="text" class="form-control textField" id="buyName" name="buyName" placeholder="Name" required>
                        <div id="buyNameVal"></div>
                    </div>
                    <div class="col-lg-2">
                        <label class="form" for="buyId"><b>Train-Nr</b></label>
                        <input type="text" class="form-control textField" id="buyId" name="buyId" placeholder="00000" required minlength="5" maxlength="5">
                        <div id="buyTrainVal"></div>
                    </div>
                    <div class="filler-20"></div>
                    <div class="col-lg"></div>
                </div>
                <div class="row">
                    <div class="col-lg">
                        <input type="text" class="form-control textField" id="buyStart" name="buyStart" placeholder="Start" required>
                        <div id="buyStartVal"></div>
                    </div>
                    <div class="col-lg">
                        <input type="text" class="form-control textField" id="buyDestination" name="buyDestination" placeholder="Destination" required>
                        <div id="buyDestinationVal"></div>
                    </div>
                </div>
                <div class="filler-20"></div>
                <div class="row">
                    <div class="col-lg"></div>
                    <button class="col-lg cBtnPrimary" id="buyBuyBtn" style="height: 60px; padding: 10px;"><b>Buy for 4.90 CHF</b></a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
