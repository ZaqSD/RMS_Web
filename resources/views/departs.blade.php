@extends('app')
@section('content')

<div class="container">
    <h1>Next Departs</h1>
    <form>
        <div class="row">
            <div class="col-lg-10 pe-0">
                <input type="text" class="form-control textField" placeholder=" Search Station" id="depStationName">
            </div>
            <button class="col-lg-1 btn btn-light cBtnPrimary mx-0 px-0 my-0 py-0">Search</button>
        </div>
    </form>
    <div>
        <table class="table table-borderless">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Train-Nr</th>
                    <th scope="col">Departure</th>
                    <th scope="col">Destination</th>
                    <th scope="col">Platform</th>
                </tr>
            </thead>
            <tbody>
                @isset($StationTimetables)
                @foreach($StationTimetables as $stationTimetable)
                <tr>
                    <td width="60px"><img src="/img/line/product-ic-1.png"></td>
                    <th scope="row" width="150px">IC1-{{ $stationTimetable->linId }}</td>
                    <td>{{ $stationTimetable->timTimeOnDepature}}</td>
                    <td>Zürich Hbf</td>
                    <td>{{ $stationTimetable->timPlatform}}</td>
                </tr>
                @endforeach
                @endisset
            </tbody>
        </table>
    </div>
</div>
@endsection
