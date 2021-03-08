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
                    <li class="nav-item bottomNavbarItem-100">
                        <a class="nav-link" style="color:black; width: 100px;" href="/">Home</a>
                    </li>
                    <li class="nav-item bottomNavbarItem-175">
                        <a class="nav-link" style="color:black; width: 175px;" href="/timetable">Timetable</a>
                    </li>
                    <li class=" nav-item bottomNavbarItem-175">
                        <a class="nav-link" style="color:black; width: 175px;" href="/departs">Next Departs</a>
                    </li>
                    <li class="nav-item bottomNavbarItem-100">
                        <a class="nav-link" style="color:black; width: 100px;" href="/maps">Maps</a>
                    </li>
                    <li class="nav-item bottomNavbarItem-100">
                        <a class="nav-link" style="color:black; width: 100px;" href="/info">Info</a>
                    </li>
                </ul>
                <div class="d-flex nav-item">
                    <img src="img/logo/RMS_1x.png" alt="Logo" width="300" height="75">
                </div>
            </div>
        </nav>
        <div style="height: 40px;"></div>

        @yield('content')
    </body>
    <script src={{asset('js/app.js')}}></script>

</html>
