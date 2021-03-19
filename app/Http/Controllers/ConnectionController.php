<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StationTimetable;
use App\Models\Station;
use App\Models\Route;
use App\Models\Ticket;

class ConnectionController extends Controller
{

    public function find() {
        $start = session('wTimStart');
        $destination = session('wTimDestination');

        $starts = StationTimetable::where('timStaName', $start)->get();
        
        $destinations = StationTimetable::where('timStaName', $destination)->get();

        $results = collect();

        foreach($starts as $start){
            foreach($destinations as $destination){
                if( $start->linId == $destination->linId ){
                    $results->put($start);
                }
            }
        }
        return view('result', $results);
        //USerCOntroller vom Auth
                    //$results->results => StationTimetable::where('linId', '10101');
    }

}
