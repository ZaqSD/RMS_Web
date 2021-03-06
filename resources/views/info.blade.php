@extends('app')
@section('content')

<div class="container">
    <h1>Info</h1>
    <div class="row">
        <div class="col-lg-6 infobox">
            <div class="infobox" style="padding-top: 0px;"></div>
            <div class="row">
                <div class="col-lg">
                    <h2>RMS Web</h2>
                </div>
                <div class="col-lg">
                    <img src="img/logo/RMS_1x.png">
                </div>
            </div>
            <h3>Created by</h3>
            <p>Andreas Siaplaouras</p>
            <h3>Version</h3>
            <p>0.1C (3)</p>
            <h3>Last updated</h3>
            <p>04.03.2021</p>
        </div>
        <div class="col-lg-6">
            <div class="infobox">
                <h2>Ressources from</h2>
                <h3>Icons</h3>
                <img src="img/logos/SBB_black.png" alt="Logo der SBB" height="32">
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
