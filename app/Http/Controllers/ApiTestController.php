<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use DateTime;
use Illuminate\Http\Request;

class ApiTestController extends Controller
{
    public function index()
    {
        $url = getenv('METRO_URL');
        $key = getenv('METRO_TOKEN');
        $client = new Client([
            'base_uri' => $url,
        ]);
        $method = 'GET';
        $uri = 'datapoints?rdf:type=odpt:TrainInformation&' . $key;   //運行状況取得
        $options = [];
        $response = $client->request($method, $uri, $options);
        $json = $response->getBody()->getContents();
        $list = json_decode($json, true);

        $trainData = null;
        foreach ($list as $item) {
            $id = $item["@id"];
            $operator = $item["odpt:operator"];
            $operator = str_replace('odpt.Operator:', '', $operator);
            $valid = $item["dct:valid"];
            $railway = $item["odpt:railway"];
            $railway = str_replace('odpt.Railway:TokyoMetro.', '', $railway);
            $timeOfOrigin = $item["odpt:timeOfOrigin"];
            $trainInformationText = $item["odpt:trainInformationText"];
            $t = new DateTime($item["dc:date"]);
            $t->setTimezone(new \DateTimeZone('Asia/Tokyo'));
            $datetime = $t->format('Y-m-d H:i');
            if (empty($item["odpt:trainInformationStatus"])) {
                $trainInfoData[] = array(
                    "id" => $id,
                    "date" => $datetime,
                    "valid" => $valid,
                    "operator" => $operator,
                    "railway" => $railway,
                    "timeOfOrigin" => $timeOfOrigin,
                    "trainInformationText" => $trainInformationText,
                );
                return view('index')->with('val', $trainInfoData);
            }
        }
    }
}
