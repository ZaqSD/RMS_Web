@extends('app')
@section('content')

<div class="container">
    <h1>Next Departs</h1>
    <div class="row">
        <div class="col-lg-11">
            <input type="text" class="form-control textField" id="depSearch" name="depSearch" placeholder=" Search Station">
        </div>
        <div class="col-lg-1">
            <button class="btn btn-light cBtnPrimary">Search</button>
        </div>
    </div>
    <div>
        <table class="table table-borderless">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col">Departure</th>
                    <th scope="col">Destination</th>
                    <th scope="col">Stops</th>
                    <th scope="col">Platform</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
