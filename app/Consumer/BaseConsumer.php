<?php
namespace App\Consumer;


abstract class BaseConsumer {

    /**
     * Return the base URL for the API to consume
     * 
     * @return string
     */
    protected abstract function getBaseUrl();

    protected function _request(string $endpoint, ConsumerParams $params) {
        // hier een leuke request

    }
}