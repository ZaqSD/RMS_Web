@extends('app')
@section('content')

<div class="container">
    <h1>Timetable - Results</h1>
    <h2>{{ session()->get('start') }} -> {{ session()->get('destination') }}</h2>
    <div>
        <table class="table table-borderless">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Train-Nr</th>
                    <th scope="col">Departure</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><img src="../img/line/product-ic-1.png"></td>
                    <th scope="row">IC1-{{ session()->get('linId') }}</th>
                    <td>{{ session()->get('TimeOnDeparture') }}</td>
                    <td>{{ session()->get('Platform') }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
