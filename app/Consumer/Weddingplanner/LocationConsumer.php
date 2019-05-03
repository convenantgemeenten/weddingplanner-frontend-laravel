<?php
namespace App\Consumer\Weddingplanner;

use App\Consumer\ConsumerParams;

class LocationConsumer extends WeddingplannerConsumer {
 

    /**
     * Gets the list locations
     * 
     * Example: [
     *      "convenantgemeenten.nl/place/1694",
     *      "convenantgemeenten.nl/place/1607",
     *      "convenantgemeenten.nl/place/1749"
     * ]
     * 
     * 
     * @return array List of location endpoints
     */
    public function getLocationList(): array {
        $sResponse = $this -> _request('place', new ConsumerParams());

        $aJSON = json_decode($sResponse, true);
        $aLocations = [];
        
        foreach ($aJSON['@graph']['@value'] as $aLocation) {
            
            $aLocations[] = parse_url('http://api.' . $aLocation['@id'], PHP_URL_PATH); // @todo: prefix weghalen zodra die uit de API is
        }

        return $aLocations;
    }

    public function getDetailedLocationList(): array {
        $aLocationList = $this->getLocationList();
        $aDetailedLocations = [];

        foreach ($aLocationList as $sLocation) {
            $sResponse = $this -> _request($sLocation);
            $aJSON = json_decode($sResponse, true);
            
            $aDetailedLocations[] =  [
                'id'         => @$aJSON['@id'],
                'url'        => @$aJSON['url'],
                'naam'       => @$aJSON['naam'],
                'email'      => @$aJSON['contactpunt']['emailadres'],
                'telefoon'   => @$aJSON['contactpunt']['telefoonnummer'],
                'prijs'      => @$aJSON['prijs']['@value'],
                'capaciteit' => @$aJSON['maxpersonen']['@value']
            ];
        
        }

        return $aDetailedLocations;
   }
}