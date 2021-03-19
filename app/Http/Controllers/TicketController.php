<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class TicketController extends Controller
{
    public function index() {
        return view('welcome', [
            'blogs' => Blog::all()
        ]);
    }

    public function save( Request $request){

        $name = $request->buyName;
        $line = $request->buyId;
        $start = $request->buyStart;
        $destination = $request->buyDestination;

        Ticket::create([
            'linId' => $line,
            'ticNameOfPerson' => $name,
            'ticStart' => 'Hi',
            'ticDestination' => 'Hi',
            'validated' => $request->validated
        ]);

        return view('buyBuy', [
            'tickets' => Ticket::where( "ticNameofPerson", '=', $name)->where("linId", "=", $line)->first()
        ]);
    } 

    public function show($id) {
        return view('verification', [
            'blogs' => Blog::all()
        ]);
    }
}
