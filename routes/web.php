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
    return view('index');
});

Route::group(['prefix' => 'test'], 
    function() {
        Route::get('locations', 'TestController@testLocations');
        Route::get('babs', 'TestController@testBabs');
    }
);
Route::get('/beschikbaarheid', 'AvailabilityController@availability');