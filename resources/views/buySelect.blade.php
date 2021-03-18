@extends('app')
@section('content')

<div class="container">
    <h1>Add Information</h1>
    <div class="col-lg">
        <form method="POST" action="../../app/Http/Controllers/ConnectionController.php">
            <div class="container">
                <div class="row">
                    <div class="col-lg">
                        <label class="form" for="buyId"><b>Name</b></label>
                        <input type="text" class="form-control textField" id="buyName" name="buyName" placeholder="Name">
                    </div>
                    <div class="col-lg-2">
                        <label class="form" for="buyId"><b>Train-Nr</b></label>
                        <input type="text" class="form-control textField" id="buyId" name="buyId" placeholder="00000">
                    </div>
                    <div style="height: 20px;"></div>
                    <div class="col-lg"></div>
                    <a class="col-lg cBtnPrimary" style="height: 60px; padding: 10px;" href="/tickets/select/buy">Continue</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
