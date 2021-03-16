<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StationTimetable;
use App\Models\Station;
use App\Models\Line;
use App\Models\Ticket;

class TimetableController extends Controller
{

    public function list() {
        $station = 'Genève Aéroport';//session('depStationName');
        /*
        $time = now();
        'NextLines' => StationTimetable::where('staName', '=', $station)->where('timTimeOnDeparture', '=', now());
        */

        //dd(StationTimetable::where('timStaName', $station)->get());
        foreach( $StationTimetables as $timetables ){
            foreach( $timetables->lines as $route){
                $route->linTag;
                $roze->linDestination;
            }
        }

        return view('departs', [
            'StationTimetables' => StationTimetable::where('timStaName', $station)->get()
        ]);


        //


    }

}
