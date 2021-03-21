<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TimetableController;
use App\Http\Controllers\ConnectionController;
use App\Http\Controllers\TicketController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::middleware( ['auth'] )->group( function(){*/


Route::get('/', function () {
    return view('widgets');
});

Route::get('/departs', [TimetableController::class, 'list']);

//Route::get('/departs/{id}', [TimetableController::class, 'load']);

Route::get('/info', function() {
    return view ('info');
});

Route::get('/maps', function() {
    return view ('maps');
});

Route::get('/maps/all', function() {
    return view ('imgAll');
});

Route::get('/maps/zhs', function() {
    return view ('imgZhs');
});

Route::get('/register', function() {
    return view ('register');
});

Route::get('/tickets', function() {
    return view ('buySelect');
});

Route::get('/tickets/verify', function() {
    return view ('verification');
});

Route::post('/tickets/select/buy', [TicketController::class, 'save']);

Route::post('/tickets/select/buy/verificate', [TicketController::class, 'save']);

Route::get('/timetable', function() {
    return view ('timetable');
});

Route::post('/timetable/results', [ConnectionController::class, 'find']);

Route::get('/widgets', function() {
    return view ('widgets');
});

/*});*/