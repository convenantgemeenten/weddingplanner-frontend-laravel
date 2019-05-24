<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Consumer\Weddingplanner\LocationConsumer;
use App\Consumer\Weddingplanner\BabsConsumer;
use Illuminate\Http\Request;

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
    
    public function ajaxRequest()
    {
        return view('meldingAjax');
    }
    
    public function ajaxRequestPost(Request $request)
    {
        $input = $request->all();
        $BSNFirst = $input['FirstBSN'];
        $BSNSecond =$input['SecondBSN'];
        $WeddingDate = $input['WeddingDate'];
        $check = $input['Check'];
        $ret="";

        if($check == "birthdate1"){
            //check first birthdate
            $ret="Partner 1 is op de trouwdatum nog geen 18 jaar oud.";
            return response()->json(['error'=>$ret]);
        }
        if($check == "birthdate2"){
            //check second birthdate
            $ret="Partner 2 is op de trouwdatum 18 jaar of ouder.";
            return response()->json(['success'=>$ret]);
        }
    }

    public function ajaxRequestPostDigiD(Request $request)
    {
        $input = $request->all();
        $BSN1 = $input['FirstBSN'];
        $BSN2 = $input['SecondBSN'];
        if($BSN1!=null){$_SESSION["BSN1"] = $BSN1;}
        if($BSN1!=null){$_SESSION["BSN2"] = $BSN2;}
        return response()->json(['success'=>'OK']);
    }
}