@extends('app')
@section('content')

<div class="container">
    <h1>Widgets</h1>
    <div class="row">
        <div class="col-lg-6 infobox">
            <div class="infobox" style="padding-top: 0px;"></div>
            <h2>Timetable</h2>
            <form method="POST" action="/timetable/results">
                @csrf
                <div class="row">
                    <div class="col-lg-4 me-0 pe-0">
                        <input type="text" class="form-control textField" id="wTimStart" name="wTimStart" placeholder="Start">
                    </div>
                    <div class="col-lg-4 me-0 pe-0 ms-0 ps-0">
                        <input type="text" class="form-control textField" id="wTimDestination" name="wTimDestination" placeholder="Destination">
                    </div>
                    <button class="col-lg-3 btn cBtnPrimary ms-0 ps-0 my-0">Search</a>
                </div>
            </form>
        </div>
        <div class="col-lg-6">
            <div class="infobox">
                <h2>Good Day :)</h2>
                <h3>It is the
                    <?php echo now()?>
                </h3>
            </div>
            <div style="height: 10px;"></div>
            <div class="infobox">
                <h2>Next Departures</h2>
                <h3>Coming soon...</h3>
            </div>
        </div>
    </div>

</div>
@endsection
