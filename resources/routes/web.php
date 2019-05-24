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
Route::get('/reservering', 'ReservationController@reservation');
Route::get('/melding', 'NotifyController@notify');

Route::get('ReservationAjaxRequest', 'ReservationController@ajaxRequest');
Route::post('ReservationAjaxRequest', 'ReservationController@ajaxRequestPost');
Route::post('ReservationAjaxRequestDigiD', 'ReservationController@ajaxRequestPostDigiD');

Route::get('NotifyAjaxRequest', 'NotifyController@ajaxRequest');
Route::post('NotifyAjaxRequest', 'NotifyController@ajaxRequestPost');