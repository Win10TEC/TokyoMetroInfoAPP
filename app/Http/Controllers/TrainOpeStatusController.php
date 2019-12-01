<?php

namespace App\Http\Controllers;

use DateTime;
use DateTimeZone;

class TrainOpeStatusController extends Controller
{
    public function index()
    {
        $items = null;
        $item = null;
        $tmp = null;
        $api = $this->getTrainOpeStatusApi();
        foreach ($api as $data) {
            $date = $data["date"];
            $operator = $data["operator"];
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
        return view('train.index', $item);
    }

    public function getTrainOpeStatusApi()
    {
        $trainInfoData = null;
        $url = getenv('METRO_URL');
        $key = getenv('METRO_TOKEN');
        $client = new \GuzzleHttp\Client();
        $uri = $url . 'datapoints?rdf:type=odpt:TrainInformation&' . $key;   //運行状況取得
        $response = $client->request('GET', $uri);
        $res = $response->getBody()->getContents();
        $json = json_decode($res, true);

        foreach ($json as $item) {
            $id = $item["@id"];
            $operator = $item["odpt:operator"];
            $operator = str_replace('odpt.Operator:', '', $operator);
            $railway = $item["odpt:railway"];
            $railway = str_replace('odpt.Railway:TokyoMetro.', '', $railway);
            $t = new DateTime($item["dc:date"]);
            $t->setTimeZone(new DateTimeZone('Asia/Tokyo'));
            $datetime = $t->format('Y-m-d H:i');
            $valid = $item["dct:valid"];
            $timeOfOrigin = $item["odpt:timeOfOrigin"];
            $trainInformationText = $item["odpt:trainInformationText"];

            $trainInfoData[] = array(
                "id" => $id,
                "date" => $datetime,
                "valid" => $valid,
                "operator" => $operator,
                "railway" => $railway,
                "timeOfOrigin" => $timeOfOrigin,
                "trainInformationText" => $trainInformationText,
            );
        }
        if (!empty($trainInfoData)) {
            return $trainInfoData;
        } else {
            return 0;
        }
    }
}
