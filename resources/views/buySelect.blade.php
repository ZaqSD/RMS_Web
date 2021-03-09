@extends('app')
@section('content')

<div class="container">
    <h1>Add Information</h1>
    <div class="col-lg">
        <form>
            <div class="container">
                <div class="row">
                    <div class="col-lg">
                        <input type="text" class="form-control textField" id="buyName" name="buyName" placeholder="Name">
                    </div>
                    <div style="height: 20px;"></div>
                    <div class="row">
                        <div class="col-lg"></div>
                        <a class="col-lg cBtnPrimary" style="height: 60px; padding: 10px;" href="/tickets/select/buy">Continue</a>
                    </div>
                </div>
        </form>
    </div>
</div>
@endsection
