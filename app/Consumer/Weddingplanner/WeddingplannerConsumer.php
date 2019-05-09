<?php
namespace App\Consumer\Weddingplanner;

use App\Consumer\BaseConsumer;

class WeddingplannerConsumer extends BaseConsumer {

    protected function getBaseUrl(): string {
        return 'http://convenantgemeenten.nl/';
    }
}