<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Consumer\Weddingplanner\LocationConsumer;
use App\Consumer\Weddingplanner\BabsConsumer;
use Illuminate\Http\Request;

class NotifyController extends Controller {

    public function notify() {
        return view(
            'melding',
            [
                 'message' => ''
            ]
        );
    }
    
    public function ajaxRequest()
    {
        return view('meldingAjax');
    }
    
    public function ajaxRequestPost(Request $request)
    {
        $ret="";
        $input = $request->all();
        //$ret=print_r($input,true);
        $reqType = $input['request'];
        switch($reqType){
            case 'Bloedverw':
                $ret.="Response van Bloedverwant API request<br>";
            break;
            case 'Curatele':
                $ret.="Response van Curatele API request<br>";
            break;
            case 'EerderGetrouwd':
                $ret.="Response van Eerder getrouwd API request<br>";
            break;
        }
        
        return response()->json(['success'=>$ret]);
    }
}