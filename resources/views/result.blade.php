@extends('app')
@section('content')

<div class="container">
    <h1>Timetable - Results</h1>
    <div>
        <table class="table table-borderless">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Departure</th>
                    <th scope="col">Destination</th>
                    <th scope="col">Stops</th>
                    <th scope="col">Platform</th>
                </tr>
            </thead>
            <tbody>
                @isset($results)
                @foreach($results as $result)
                <tr>
                    <td>{{ $result}}</td>
                    <th scope="row">IC1-55784</th>
                    <td>{{ $result->timTimeOfDepature}}</td>
                    <td>{{ $result->lines}}</td>
                    <td></td>
                    <td>{{ $result->timPlatform}}</td>
                </tr>
                @endforeach
                @endisset
            </tbody>
        </table>
    </div>
</div>
@endsection
