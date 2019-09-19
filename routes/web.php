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

Route::get('/', function () {
    $config['center'] = 'Salford Quays, Salford';
    $config['zoom'] = '14';
    $config['map_height'] = '500px';
    $config['scrollwheel'] = false;

    GMaps::initialize($config);

    // Add MARKER
    $marker['position'] = 'Salford Quays, Salford';
    $marker['infowindow_content'] = 'Salford Quays';
    GMaps::add_marker($marker);

    // Can add multiple markers to the map if necessary
    // $marker['icon'] = 'filename' - can add an icon to the marker

    $map = GMaps::create_map();

    return view('welcome')->with('map', $map);
});
