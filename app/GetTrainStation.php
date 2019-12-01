<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GetTrainStation extends Model
{
    public function GetTrainStationApi(){
        $json=null;
        $url = getenv('METRO_URL');
        $key = getenv('METRO_TOKEN');
        $client = new \GuzzleHttp\Client();
        $uri = $url . 'datapoints?rdf:type=odpt:Station&' . $key;
        $response = $client->request('GET', $uri);
        $res = $response->getBody()->getContents();
        $json = json_decode($res, true);
//        var_dump($json);
        return $json;
    }
}
