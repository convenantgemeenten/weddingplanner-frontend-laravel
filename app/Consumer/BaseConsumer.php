<?php
namespace App\Consumer;


abstract class BaseConsumer {

    /**
     * Return the base URL for the API to consume
     * 
     * @return string
     */
    protected abstract function getBaseUrl(): string;

    protected function _request(string $endpoint, ConsumerParams $params = null): string {
        $sURL = $this->getBaseUrl() . $endpoint;
        
        if (!is_null($params) && count($params->toArray()) > 0) {
            $sURL .= '?' . http_build_query($params->toArray()); 
        } 
        
        $oCURL = curl_init();
        
        curl_setopt_array($oCURL, [
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $sURL,
            CURLOPT_USERAGENT => 'Weddingplanner Demo Client/1.0'
        ]);
        
        $sResponse = curl_exec($oCURL);
        curl_close($oCURL);
        return $sResponse;
    }
}