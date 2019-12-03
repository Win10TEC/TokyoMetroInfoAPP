<?php

namespace App\Http\Controllers;

use App\GetTrainTime;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class TrainTimeController extends Controller
{
    public function index(Request $request){
        return view('traintime.index',['msg' => 'フォーム入力']);
    }
    public function post(Request $request){
        $api= new GetTrainTime();

        $val=[
            'station' => 'required'
        ];
        try {
            $this->validate($request, $val);

        } catch (ValidationException $e) {
        }
        $api->GetTrainTimeApi($val);
        return view('traintime.index',['msg' => 'フォーム入力OK']);
    }
}
