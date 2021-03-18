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

        $starts = [
            'starts' => StationTimetable::where('timStaName', $start)->get(),
        ];
        
        $festinations = [
            'destinations' => StationTimetable::where('timStaName', $destination)->get(),
        ];

        $results = [
            'results'
        ];

        foreach($starts as $start){
            foreach($destinations as $destination){
                if( $start->linId == $destination->linId ){
                    return view('buyBuy', ['results' => StationTimetable::where('linId','10101')]);
                    //$results->results => StationTimetable::where('linId', '10101');
                }
            }
        }

        return view('buyBuy', $results);

    }

}
