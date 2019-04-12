<?php
namespace App\Consumer\Weddingplanner;

use App\Consumer\BaseConsumer;

class WeddingplannerConsumer extends BaseConsumer {

    protected function getBaseUrl() {
        return ' http://api.convenantgemeenten.nl/';
    }

}