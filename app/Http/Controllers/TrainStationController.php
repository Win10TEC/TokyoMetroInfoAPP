<?php

namespace App\Http\Controllers;

use App\GetTrainStation;
use Illuminate\Http\Request;

class TrainStationController extends Controller
{
    public function index(){
        $api= new GetTrainStation();
        $api->GetTrainStationApi();
        return view('trainstation.index',$api);
    }
}
