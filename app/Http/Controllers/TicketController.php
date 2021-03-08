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

        Blog::create([
            'farId' => $request->farId,
            'linId' => $request->linId,
            'ticStart' => $request->ticStart,
            'ticDestination' => $request->ticDestination,
            'validated' => $request->validated
        ]);

        return view('verificationRD', [
            'blogs' => Blog::all()
        ]);

        return redirect( '/' );
    } 

    public function show($id) {
        return view('welcome', [
            'blogs' => Blog::all()
        ]);
    }
}
