<?php
namespace App\Consumer\Weddingplanner;

use App\Consumer\ConsumerParams;

class BabsConsumer extends WeddingplannerConsumer {
 

    /**
     * Gets a detailed list of wedding officiants
     * 
     * Example:  array(5) {
     *  ["voornaam"]=>
     *  string(6) "Daphne"
     * ["achternaam"]=>
     * /string(6) "Bruijn"
     * ["email"]=>
     *  string(19) "d.debruijn@email.nl"
     * ["telefoon"]=>
     * NULL
     * ["omschrijving"]=>
     * string(58) "Liefde is leven. Dus als je liefde mist, mis je het leven."
     *}
     * 
     * 
     * @return array List of officiants
     */
    public function getDetailedBabsList(): array {
        $sResponse = $this -> _request('weddingofficiant');

        $aJSON = json_decode($sResponse, true);
        $aBabs = [];
        
        foreach ($aJSON['@graph']['@value'] as $aRetval) {
            $aBabs[] = [
                'voornaam'      => @$aRetval['voornaam'],
                'achternaam'    => @$aRetval['achternaam'],
                'email'         => @$aRetval['contactpunt']['emailadres'],
                'telefoon'      => @$aRetval['contactpunt']['telefoonnumer'],
                'omschrijving'  => @$aRetval['omschrijving']
            ];
        }

        return $aBabs;
    }
}