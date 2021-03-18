@extends('app')
@section('content')

<div class="container">
    <h1>Maps</h1>
    <div class="row">
        <div class="msgBox">
            <h3>Warning - Limited Access to Stations / Lines</h3>
            <p>
                All Lines are closed, except for the IC1 (Genève Aéroport <-> Zürich Hbf)<br>
                    All Stations are closed, except for Bern, Fribourg/Freiburg, Genéve, Genève Aéroport, Lausanne, Zürich Hbf</p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg zoom">
            <h2>Long-Distance</h2>
            <a href="/maps/all">
                <img src="img/maps/all_S.png" alt="Map All" width="400" height="200">
            </a>
        </div>
        <div class="col-lg zoom">
            <h2>Zurich Suburban</h2>
            <a href="/maps/zhs">
                <img src="img/maps/zhs_S.png" alt="Zurich Suburban" width="400" height="200">
            </a>
        </div>
    </div>
</div>
@endsection
