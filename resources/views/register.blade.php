<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>RMS - Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href={{asset('css/app.css')}}>
</head>

<body style="background-color: #DCDCDC; height: 100vh; width:100vw;     box-shadow: 4px 4px 4px 4px rgba(0, 0, 0, 0.2);
" class="d-flex align-items-center justify-content-center">
    <div class="container">
        <form style="background-color: white; padding: 20px;">
            <div class="row">
                <h1>Registration</h1>
            </div>
            <div class="container">
                <div class="col-lg">
                    <h2>Personal Details</h2>
                </div>
                <div class="row">
                    <h4 class="col-4">Male</h4>
                </div>
                <div class="row">
                    <div class="col-lg">
                        <input type="text" class="form-control textField" id="regPrename" name="regPrename" placeholder="Prename">
                    </div>
                    <div class="col-lg">
                        <input type="text" class="form-control textField" id="regName" name="regName" placeholder="Name">
                    </div>
                </div>
                <div style="height: 20px;"></div>
                <div class="row">
                    <h2 class="col-lg">Logindetails</h2>
                </div>
                <div class="row">
                    <div class="col-lg">
                        <input type="email" class="form-control textField" id="regEmail" name="regEmail" placeholder="E-Mail">
                    </div>
                    <div class="col-lg">
                        <input type="password" class="form-control textField" id="regPassword" name="regPassword" placeholder="Password">
                    </div>
                </div>
                <div class="row">
                    <p><b>Note: </b>For security, your password will be hashed with SHA-256. Still, please refer from using your banking password.</p>
                </div>
                <div class="row">
                    <h2 class="col-lg">Address</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <input type="text" class="form-control textField" id="regAddress" name="regAddress" placeholder="Street Street-Nr.">
                    </div>
                    <div class="col-lg-1">
                        <input type="text" class="form-control textField" id="regPlz" name="regPlz" placeholder="PLZ">
                    </div>
                    <div class="col-lg-2">
                        <input type="text" class="form-control textField" id="regCity" name="regCity" placeholder="City">
                    </div>
                    <div class="col-lg-3">
                        <input type="text" class="form-control textField" id="regCountry" name="regCountry" placeholder="Country">
                    </div>
                    <div class="col-lg-3">
                        <input type="text" class="form-control textField" id="regState" name="regState" placeholder="Province / State">
                    </div>
                </div>
            </div>
            <div style="height: 20px;"></div>
            <div class="row">
                <a class="col-lg cBtnSecondary" style="height: 60px; padding: 10px;" href="/">Cancel</a>
                <a class="col-lg cBtnPrimary" style="height: 60px; padding: 10px;" href="/login">Login</a>
            </div>
        </form>
    </div>
</body>

</html>
