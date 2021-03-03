<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>RMS - Login</title>
    <link href="https://blogfonts.com/css/aWQ9MTQzMTYwJnN1Yj0xNjAmYz16JnR0Zj1aVVJDSEJDSS50dGYmbj16dXJpY2g/Zurich.ttf" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href={{asset('css/app.css')}}>
</head>

<body style="background-color: #DCDCDC; height: 100vh; width:100vw" class="d-flex align-items-center justify-content-center">
    <div class="container">
        <div class="col-4">

        </div>
        <div class="loginBox d-flex justify-content-center row" style="width:500px">
            <div class="col-12">
                <img class="justify-content-center" src="img/logo/RMS_1x.png" width="300" height="75">
            </div>
            <input type="email" class="form-control textField" style="width: 400px; height: 60;" id="loginEmail" name="loginEmail" placeholder="E-Mail">
            <input type="password" class="form-control textField" style="width: 400px; height: 60;" id="loginPassword" name="loginPassword" placeholder="Password">

            <a href="/timetable" class="button cBtnPrimary col-12" style="width: 400px;">Login</a>
            <a href="/register" class="button cBtnSecondary col-12" style="width: 400px;">Register</a>
        </div>
    </div>
</body>

</html>
