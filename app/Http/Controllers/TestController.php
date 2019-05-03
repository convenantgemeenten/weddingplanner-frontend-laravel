<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Consumer\Weddingplanner\LocationConsumer;
use App\Consumer\Weddingplanner\BabsConsumer;

class TestController extends Controller {


    public function testLocations() {
        $oConsumer = new LocationConsumer();
        var_dump($oConsumer->getDetailedLocationList());
    }

    public function testBabs() {
        $oConsumer = new BabsConsumer();
        var_dump($oConsumer->getDetailedBabsList());
    }
}