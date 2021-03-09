<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index() {
        return view('welcome', [
            'blogs' => Blog::all()
        ]);
    }

    public function save( Request $request){

        $name = $request->ticNameOfPerson;
        $line = $request->linId;

        Ticket::create([
            'farId' => $request->farId,
            'linId' => $request->linId,
            'ticNameOfPerson' => $request->ticNameOfPerson,
            'ticStart' => $request->ticStart,
            'ticDestination' => $request->ticDestination,
            'validated' => $request->validated
        ]);

        return view('verification', [
            'tickets' => Ticket::where( "ticNameofPerson", '=', $name)->where("linId", "=", $line)->get()
        ]);
    } 

    public function show($id) {
        return view('verification', [
            'blogs' => Blog::all()
        ]);
    }
}
