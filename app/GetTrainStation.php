<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GetTrainStation extends Model
{
    public function GetTrainStationApi(){
        $StationDate=null;
        $url = getenv('METRO_URL');
        $key = getenv('METRO_TOKEN');
        $client = new \GuzzleHttp\Client();
        $uri = $url . 'datapoints?rdf:type=odpt:Station&' . $key;
        $response = $client->request('GET', $uri);
        $res = $response->getBody()->getContents();
        $json = json_decode($res, true);

        foreach ($json as $item){
            $sameAs = $item["owl:sameAs"];
            $sameAs = str_replace('odpt.Station:', '', $sameAs);
            $operator = $item["odpt:operator"];
            $operator = str_replace('odpt.Operator:', '', $operator);
            $railway = $item["odpt:railway"];
            $railway = str_replace('odpt.Railway:', '', $railway);

            $StationDate[] = array(
                "date" => $item["dc:date"],
                "title" => $item["dc:title"],
                "sameAs" => $sameAs,
                "railway" => $railway,
                "operator" => $operator,
                "region" => $item["ug:region"],
                "connectingRailway" => $item["odpt:connectingRailway"],
                "facility" => $item["odpt:facility"],
                "passengerSurvey" => $item["odpt:passengerSurvey"],
                "stationCode" => $item["odpt:stationCode"],
                "exit" => $item["odpt:exit"],
            );
        }
        return $StationDate;
    }
}
