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
                <input type="text" class="form-control textField" id="timStart" name="timStart" placeholder="00">
            </div>
            <div class="col-lg-2">
                <input type="text" class="form-control textField" id="timStart" name="timStart" placeholder="00">
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <input type="text" class="form-control textField" id="timStart" name="timStart" placeholder="Destination">
            </div>
            <div class="col-lg-4">
                <input type="text" class="form-control textField" id="timStart" name="timStart" placeholder="Date">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <button class="cBtnPrimary" style="width:312px;">Search</button>
            </div>
            <div class="col-lg-2">
                <div class="row">
                    <div class="col-lg">
                        <input type="radio" class="btn-check" style="" name="timing" id="from" autocomplete="off" checked>
                        <label class="btn cBtnRadio" for="from">From</label>
                    </div>
                    <div class="col-lg">
                        <input type="radio" class="btn-check" name="timing" id="to" autocomplete="off">
                        <label class="btn cBtnRadio" for="to">To</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
