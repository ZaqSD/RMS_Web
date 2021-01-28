<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>RMS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body style="background-color: #FFFFFF">
    <!-- As a link -->
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Fahrplan</a>
        </div>
    </nav>

    <!-- As a heading -->
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">Navbar</span>
        </div>
    </nav>
    <div class="container">

        @yield('content')

    </div>
</body>
</html>
