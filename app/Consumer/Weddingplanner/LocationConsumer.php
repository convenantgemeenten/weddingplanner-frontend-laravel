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
            
            $aLocations[] =  parse_url( $aLocation['@id'], PHP_URL_PATH); // @todo: prefix weghalen zodra die uit de API is
        }

        return $aLocations;
    }

    /**
     * Gets a detailed list of locations
     * 
     * Example response: 
     * 0]=>
     *   array(7) {
     *       ["id"]=>
     *      string(32) "convenantgemeenten.nl/place/1731"
     *       ["url"]=>
     *       string(16) "www.medemblik.nl"
     *       ["naam"]=>
     *       string(23) "Gemeentehuis - Raadzaal"
     *       ["email"]=>
     *       NULL
     *       ["telefoon"]=>
     *       string(10) "0229856000"
     *       ["prijs"]=>
     *       string(5) "50.00"
     *       ["capaciteit"]=>
     *      string(3) "200"
     *   }
     * 
     * @return array
     * 
     */
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