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
        <nav class="navbar navbar-expand-md navbar-light bg-light">
            <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item topNavbarItem active">
                        <a class="nav-link" href="#">Info</a>
                    </li>
                    <li class="nav-item topNavbarItem active">
                        <a class="nav-link" href="#">Settings</a>
                    </li>
                    <li class="nav-item topNavbarItem active">
                        <a class="nav-link" href="#">Profile</a>
                        <div class="dropdown-content">
                            <a href="#">Link 1</a>
                            <a href="#">Link 2</a>
                            <a href="#">Link 3</a>
                        </div>
                    </li>
                    <li>
                        <div class="dropdown">
                            <button class="topNavbarItem dropbtn">Dropdown</button>
                            <div class="dropdown-content">
                                <a href="#">Link 1</a>
                                <a href="#">Link 2</a>
                                <a href="#">Link 3</a>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="d-flex nav-item">
                    <img src="img/logo/RMS_1x.png" alt="Logo" width="300" height="75">
                </div>
            </div>
        </nav>
        <nav class="navbar cNavbar navbar-expand-md navbar-light bg-light">
            <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item bottomNavbarItem">
                        <a class="nav-link" style="color:black" href="#">Timetable</a>
                    </li>
                    <li class=" nav-item bottomNavbarItem">
                        <a class="nav-link" style="color:black" href="#">Next Departs</a>
                    </li>
                    <li class="nav-item bottomNavbarItem">
                        <a class="nav-link" style="color:black" href="#">Tickets</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div style="height: 40px;"></div>

        @yield('content')
    </body>

</html>
