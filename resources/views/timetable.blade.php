@extends('app')
@section('content')

<div class="container">
    <h1>Timetable</h1>
    <div class="col-lg-6">
        <div class="row">
            <div class="col-lg-6">
                <input type="text" class="form-control textField" id="timStart" name="timStart" placeholder="Departure">
            </div>
            <div class="col-lg-2">
                <input type="text" class="form-control textField" id="timStart" name="timHour" placeholder="00">
            </div>
            <div class="col-lg-2">
                <input type="text" class="form-control textField" id="timStart" name="timMinute" placeholder="00">
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <input type="text" class="form-control textField" id="timStart" name="timDestination" placeholder="Destination">
            </div>
            <div class="col-lg-4">
                <input type="text" class="form-control textField" id="timStart" name="timDate" placeholder="Date">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <button class="cBtnPrimary form-control">Search</button>
            </div>
            <div class="col-lg-2 me-0 pe-0">
                <input type="radio" class="btn-check" name="timing" id="from" autocomplete="off" checked>
                <label class="btn cBtnRadio form-control" for="from">From</label>
            </div>
            <div class="col-lg-2 ms-0 ps-0">
                <input type="radio" class="btn-check" name="timing" id="to" autocomplete="off">
                <label class="btn cBtnRadio form-control" for="to">To</label>
            </div>

        </div>
    </div>
</div>
@endsection
