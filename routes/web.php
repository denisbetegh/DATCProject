<?php

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
use App\Irrigation;
/*  Route::get('/', function () {
    /* $config['center'] = 'New York, USA';
    $config['zoom'] = '14';
    $config['map_height'] = '350px';

    $config['scrollwheel'] = true;
    GMaps::initialize($config);
    $map= Gmaps::create_map();

    return view('irrigation.index');
});   */
Route::resource('irrigations', 'IrrigationController');
Route::get('/', 'IrrigationController@index');

// Route::resource('index', 'IrrigationController');
// Route::get('/index', 'IrrigationController@index');