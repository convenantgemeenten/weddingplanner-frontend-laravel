<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Consumer\Weddingplanner\LocationConsumer;
use App\Consumer\Weddingplanner\BabsConsumer;

class ReservationController extends Controller {


    public function reservation() {
        return view(
            ' reservering',
            [
                'locations' => (new LocationConsumer())->getDetailedLocationList()
                , 'babs' =>  (new BabsConsumer())->getDetailedBabsList()
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