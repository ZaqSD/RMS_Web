<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class LoginController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function login() {

        return view('timetable', [
            'blogs' => Blog::all()
        ]);
    }

    public function register() {
        
        return view('timetable', [
            'blogs' => Blog::all()
        ]);
    }

    public function save( Request $request){

        Blog::create([
            'title' => $request->title,
            'lead' => $request->lead,
            'content' => $request->content
        ]);

        return view('welcome', [
            'blogs' => Blog::all()
        ]);

        return redirect( '/' );

}
