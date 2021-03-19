<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StationTimetable;
use App\Models\Station;
use App\Models\Route;
use App\Models\Ticket;

class TimetableController extends Controller
{

    public function list() {
        $station = 'Genève Aéroport';//session('depStationName');

        return view('departs', [
            'StationTimetables' => StationTimetable::where('timStaName', $station)->get()
        ]);

    }

    public function find() {
        return view('');
    }

}
