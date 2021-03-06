<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('widgets');
});

Route::get('/departs', function () {
    return view ('departs');
});

Route::get('/departs{id}', [TimetableController::class, 'load']);

Route::get('/info', function() {
    return view ('info');
});

Route::get('/maps', function() {
    return view ('maps');
});

Route::get('/maps/all', function() {
    return view ('imgAll');
});

Route::get('/register', function() {
    return view ('register');
});

Route::get('/tickets', function() {
    return view ('ticket');
});

Route::get('/tickets/select', function() {
    return view ('buySelect');
});

Route::get('/tickets/select/buy', function() {
    return view ('buyBuy');
});

Route::post('/tickets/select/buy/verificate', [TicketController::class, 'save']);

Route::get('/timetable', function() {
    return view ('timetable');
});

Route::get('/widgets', function() {
    return view ('widgets');
});