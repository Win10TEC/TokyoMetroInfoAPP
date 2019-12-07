<?php

namespace App\Http\Controllers;

use App\GetTrainTime;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class TrainTimeController extends Controller
{
    public function index(Request $request){
            $api= new GetTrainTime();
            $uri = $request->input('odpt:station');
            if (isset($uri)) {
//                $api->GetTrainTimeApi($uri);
//                $api->getTrainTimeList($uri);
                $api->timeTablesSaturday($uri);
            }
        return view('traintime.index',$api);
    }
}
