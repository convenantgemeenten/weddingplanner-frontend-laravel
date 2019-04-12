<?php
namespace App\Consumer\Weddingplanner;

use App\Consumer\ConsumerParams;

class LocationConsumer extends WeddingplannerConsumer {
 
    
    public function getLocationList() {
        $this -> _request('place', new ConsumerParams());
    }
}