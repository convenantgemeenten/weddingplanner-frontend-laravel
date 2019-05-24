<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Consumer\Weddingplanner\LocationConsumer;
use App\Consumer\Weddingplanner\BabsConsumer;

class AvailabilityController extends Controller {


    public function availability() {
        return view(
            ' beschikbaarheid',
            [
                'locations' => (new LocationConsumer())->getDetailedLocationList()
                , 'babsen' =>  (new BabsConsumer())->getDetailedBabsList()
                , 'events' => ARRAY(Array("name"=>"APIevent","startdate"=>"2019-05-24 12:00","enddate"=>"2019-05-24 13:00"))
                , 'message' => ''
            ]
        );
    }

    public function testLocations() {
        $oConsumer = new LocationConsumer();
        var_dump($oConsumer->getDetailedLocationList());
    }

    public function testBabs() {
        $oConsumer = new BabsConsumer();
        var_dump($oConsumer->getDetailedBabsList());
    }
}