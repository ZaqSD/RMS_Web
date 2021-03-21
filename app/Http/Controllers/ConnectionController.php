<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StationTimetable;
use App\Models\Station;
use App\Models\Route;
use App\Models\Ticket;

class ConnectionController extends Controller
{

    public function find( Request $request ) {
        $iStart = $request->wTimStart;
        $iDestination = $request->wTimDestination;

        session(['start' => $iStart]);
        session(['destination' => $iDestination]);

        $starts = StationTimetable::where('timStaName', $iStart)->get();
        
        $destinations = StationTimetable::where('timStaName', $iDestination)->get();

        foreach($starts as $start){
            foreach($destinations as $destination){
                if( $start->linId == $destination->linId ){
                    session(['linId' => $start->linId]);
                    session(['TimeOnDeparture' => $start->timTimeOnDeparture]);
                    session(['Platform' => $start->timPlatform]);
                    break;
                }
            }
        }

        return view('result');
        //return view('result', ['results' => $results->all()]);
        //USerCOntroller vom Auth
                    //$results->results => StationTimetable::where('linId', '10101');
    }

}
