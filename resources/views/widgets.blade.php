@extends('app')
@section('content')

<div class="container">
    <h1>Widgets</h1>
    <div class="row">
        <div class="col-lg-6 infobox">
            <div class="infobox" style="padding-top: 0px;"></div>
            <h2>Timetable - Now</h2>
            <div class="row">
                <div class="col-lg-4 me-0 pe-0">
                    <input type="text" class="form-control textField" id="wTimStart" name="wTimStart" placeholder="Start">
                </div>
                <div class="col-lg-4 me-0 pe-0 ms-0 ps-0">
                    <input type="text" class="form-control textField" id="wTimStart" name="wTimDestination" placeholder="Destination">
                </div>
                <div>
                    <button class="col-lg-4 btn cBtnPrimary ms-0 ps-0">Search</button>
                </div>
            </div>

        </div>
        <div class="col-lg-6">
            <div class="infobox">
                <h2>Tickets</h2>
                <div class="row">
                    <div class="col-lg-6">
                        <a class="btn btn-light cBtnSecondary" href="/tickets/history">History</a>
                    </div>
                    <div class="col-lg-6">
                        <a class="btn btn-light cBtnSecondary" href="/tickets/history">Show All</a>
                    </div>
                </div>
                <h3>Icons</h3>
            </div>
            <div style="height: 10px;"></div>
            <div class="infobox">
                <h2>Title</h2>
                <h3>Subtitle</h3>
            </div>
        </div>
    </div>

</div>
@endsection
