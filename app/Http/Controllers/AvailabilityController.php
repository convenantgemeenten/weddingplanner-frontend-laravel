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