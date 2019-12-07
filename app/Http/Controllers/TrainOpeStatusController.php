<?php

namespace App\Http\Controllers;

use App\getTrainOpeStatus;

class TrainOpeStatusController extends Controller
{
    public function index()
    {
        $items = null;
        $item = null;
        $tmp = null;
        $api = new GetTrainOpeStatus();
        foreach ($api->GetTrainOpeStatusApi() as $data) {
            $railway = $data["railway"];
            $trainInformationText = $data["trainInformationText"];

            if ($railway == "Chiyoda") {
                $items = ["railway" => $railway, "trainInformationText" => $trainInformationText];
            } elseif ($railway == "Tozai") {
                $items = ["railway" => $railway, "trainInformationText" => $trainInformationText];
            } elseif ($railway == "Namboku") {
                $items = ["railway" => $railway, "trainInformationText" => $trainInformationText];
            } elseif ($railway == "Hanzomon") {
                $items = ["railway" => $railway, "trainInformationText" => $trainInformationText];
            } elseif ($railway == "Hibiya") {
                $items = ["railway" => $railway, "trainInformationText" => $trainInformationText];
            } elseif ($railway == "Fukutoshin") {
                $items = ["railway" => $railway, "trainInformationText" => $trainInformationText];
            } elseif ($railway == "Marunouchi") {
                $items = ["railway" => $railway, "trainInformationText" => $trainInformationText];
            } elseif ($railway == "Ginza") {
                $items = ["railway" => $railway, "trainInformationText" => $trainInformationText];
            } else {
                $items = ["railway" => $railway, "trainInformationText" => $trainInformationText];
            }
            $tmp[] = $items;
        }
        $item = array("data" => $tmp);
        return view('trainstatus.index', $item);
    }
}
