@extends('app')
@section('content')

<div class="container">
    <h1>Next Departs</h1>
    <div class="row">
        <div class="col-lg-10 pe-0">
            <input type="text" class="form-control textField" placeholder=" Search Station">

        </div>

        <button class="col-lg-1 btn btn-light cBtnPrimary mx-0 px-0 my-0 py-0">Search</button>

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
