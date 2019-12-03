<?php

namespace App\Http\Controllers;

use App\GetTrainStation;
use Illuminate\Http\Request;

class TrainStationController extends Controller
{
    public function index(){
        $station = null;
        $api= new GetTrainStation();

        foreach ($api->GetTrainStationApi() as $item) {
            $sameAs = $item["sameAs"];
            if (strpos($sameAs, 'Marunouchi') !== false) {
                $station[] = array(
                    "title" => $item["title"],
                    "railway" => "丸ノ内線",
                    "sameAs" => $sameAs,
                );
            } elseif (strpos($sameAs, 'Ginza') !== false) {
                $station[] = array(
                    "title" => $item["title"],
                    "railway" => "銀座線",
                    "sameAs" => $sameAs,
                );
            } elseif (strpos($sameAs, 'Hibiya') !== false) {
                $station[] = array(
                    "title" => $item["title"],
                    "railway" => "日比谷線",
                    "sameAs" => $sameAs,
                );
            } elseif (strpos($sameAs, 'Chiyoda') !== false) {
                $station[] = array(
                    "title" => $item["title"],
                    "railway" => "千代田線",
                    "sameAs" => $sameAs,
                );
            } elseif (strpos($sameAs, 'Tozai') !== false) {
                $station[] = array(
                    "title" => $item["title"],
                    "railway" => "東西線",
                    "sameAs" => $sameAs,
                );
            } elseif (strpos($sameAs, 'Hanzomon') !== false) {
                $station[] = array(
                    "title" => $item["title"],
                    "railway" => "半蔵門",
                    "sameAs" => $sameAs,
                );
            } elseif (strpos($sameAs, 'Namboku') !== false) {
                $station[] = array(
                    "title" => $item["title"],
                    "railway" => "南北線",
                    "sameAs" => $sameAs,
                );
            } elseif (strpos($sameAs, 'Fukutoshin') !== false) {
                $station[] = array(
                    "title" => $item["title"],
                    "railway" => "副都心線",
                    "sameAs" => $sameAs,
                );
            } elseif (strpos($sameAs, 'Yurakucho') !== false) {
                $station[] = array(
                    "title" => $item["title"],
                    "railway" => "有楽町線",
                    "sameAs" => $sameAs,
                );
            } else {
                $station[] = array(
                    "title" => "存在しません",
                    "railway" => "存在しません",
                    "sameAs" => "存在しません",
                );
            }
        }
        $json = json_encode($station, true | JSON_UNESCAPED_UNICODE);
        return view('trainstation.index',$json);
    }
}
