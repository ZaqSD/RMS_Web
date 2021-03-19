<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>RMS</title>
    <link href="https://blogfonts.com/css/aWQ9MTQzMTYwJnN1Yj0xNjAmYz16JnR0Zj1aVVJDSEJDSS50dGYmbj16dXJpY2g/Zurich.ttf" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href={{asset('css/app.css')}}>
</head>

<body style="background-color: #FFFFFF">
    <!--
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
            <ul class="navbar-nav me-auto">
                <li class="nav-item topNavbarItem active">
                    <a class="nav-link" href="/info">Info</a>
                </li>
                <li class=" nav-item topNavbarItem active">
                    <a class="nav-link" href="/settings">Settings</a>
                </li>
                <li class="nav-item topNavbarItem active">
                    <a class="nav-link" href="/profile">Profile</a>
                </li>
            </ul>
            <div class="d-flex nav-item">
                <img src="img/logo/RMS_1x.png" alt="Logo" width="300" height="75">
            </div>
        </div>
    </nav>
    -->
    <nav class="navbar cNavbar navbar-expand-md navbar-light bg-light">
        <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item bottomNavbarItem-150">
                    <a class="nav-link bottonNavbarItemText-150" href="/">Timetable</a>
                </li>
                <li class="nav-item bottomNavbarItem-100">
                    <a class="nav-link bottonNavbarItemText-100" href="/tickets">Tickets</a>
                </li>
                <li class=" nav-item bottomNavbarItem-175">
                    <a class="nav-link" style="width: 175px; padding-right: 5px;" href="/departs">Next Departs</a>
                </li>
                <li class="nav-item bottomNavbarItem-100">
                    <a class="nav-link bottonNavbarItemText-100" href="/maps">Maps</a>
                </li>
                <li class="nav-item bottomNavbarItem-100">
                    <a class="nav-link bottonNavbarItemText-100" href="/info">Info</a>
                </li>
            </ul>
            <div class="d-flex nav-item">
                <img src="{{asset('img/logo/RMS_1x.png')}}" alt=" Logo" width="300" height="75">
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="filler-40"></div>
        <div class="msgBox">
            <h3>Warning - Limited Service</h3>
            <p>
                All Lines are closed, except IC1 (Genève Aéroport <-> Zürich Hbf)<br>
                    All Stations are closed, except for Bern, Fribourg/Freiburg, Genéve, Genève Aéroport, Lausanne, Zürich Hbf</p>
        </div>
    </div>
    <div id="filler-40"></div>

    @yield('content')
</body>
<script src="{{asset('js/app.js')}}""></script>

</html>
