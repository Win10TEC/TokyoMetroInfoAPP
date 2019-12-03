<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GetTrainTime extends Model
{
    public function GetTrainTimeApi($station){
//        $trainInfoData = null;
        $url = getenv('METRO_URL');
        $key = getenv('METRO_TOKEN');
        $client = new \GuzzleHttp\Client();
        $uri = $url . 'datapoints?rdf:type=odpt:StationTimetable&'. $key.'&odpt:'.$station;
        $response = $client->request('GET', $uri);
        $res = $response->getBody()->getContents();
        $json = json_decode($res, true);
        var_dump($json);
        return $json;
    }
}
