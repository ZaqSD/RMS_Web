<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>RMS</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href={{asset('css/app.css')}}>
    </head>

    <body style="background-color: #FFFFFF">
        <nav class="navbar navbar-expand-md navbar-light bg-light">
            <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item topNavbarItem active">
                        <a class="nav-link" href="#">Info</a>
                    </li>
                    <li class="nav-item topNavbarItem active">
                        <a class="nav-link" href="#">Settings</a>
                    </li>
                    <li class="nav-item topNavbarItem active">
                        <a class="nav-link" href="#">Profile</a>
                    </li>
                    <div class="nav-item" style="float: right;">
                        <li class="nav-item active">
                            <img src="img/logo/RMS_1x.png" alt="Logo" width="300" height="75">
                        </li>
                    </div>
                </ul>
            </div>
        </nav>
        <nav class="navbar cNavbar navbar-expand-md navbar-light bg-light">
            <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active bottomNavbarItem">
                        <a class="nav-link" style="color:black" href="#">Home</a>
                    </li>
                    <li class="nav-item bottomNavbarItem">
                        <a class="nav-link" style="color:black" href="#">Timetable</a>
                    </li>
                    <li class=" nav-item bottomNavbarItem">
                        <a class="nav-link" style="color:black" href="#">Next Departs</a>
                    </li>
                    <li class="nav-item bottomNavbarItem">
                        <a class="nav-link" style="color:black" href="#">Tickets</a>
                    </li>
                    <li class="nav-item bottomNavbarItem">
                        <a class="nav-link" style="color:black" href="#">Link</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div style="height: 40px;"></div>

        @yield('content')
    </body>

</html>
