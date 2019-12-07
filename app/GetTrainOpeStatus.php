<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DateTime;
use DateTimeZone;

class GetTrainOpeStatus extends Model
{
    public function GetTrainOpeStatusApi()
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
