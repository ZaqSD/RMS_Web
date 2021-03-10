<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimetableController extends Controller
{

    public function list($id) {
        $station = session('depStationName');
        'StationTimetable' => StationTimetable::where('staName', '=', $station);
        foreach('StationTimetable' as 'Lines'){
            'NextLines' => StationTimetable::where('linId', '=', $StationTimetable->LinId);
        }
        'nextLines' => StationTimetable::where('staName', '=', $station);

        return view('departures', [
            'StationTimetable' => StationTimetable::where('staName', '=', $station)
        ]);
    }
}
