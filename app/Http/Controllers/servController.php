<?php

namespace App\Http\Controllers;

use App\Models\Config;
use Illuminate\Http\Request;
use Response;

class servController extends Controller
{
    public function geItems($id){

        $resp = Config::find($id);

        $data["options"]=$resp;
        $data["data"]=$resp->items;
        
        return Response::json($data, 200, array('Access-Control-Allow-Origin' => '*'));        
    }

    public function setIndex(){

        return "root of the webbservice";
    }    
}
