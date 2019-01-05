<?php
/**
 * Created by PhpStorm.
 * User: Max
 * Date: 25.11.2018
 * Time: 23:34
 */

namespace application\models;

use application\core\Model;

use GuzzleHttp\Client;
use Sunra\PhpSimple\HtmlDomParser;
class Weather extends Model
{
    public function __construct()
    {
        parent::__construct();
//        echo 'The Weather Model is working';
    }

    public function getWeather()
    {
        $client = new Client([
            'headers' => [
                'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36'
            ],
            'timeout' => 10.0
        ]);
        $uri = 'http://www.gismeteo.ua/city/daily/5093/';
        $response = $client->request('GET', $uri)->getBody();

        $html = HtmlDomParser::str_get_html($response);

        foreach ($html->find('div[class=wsection wdata] table') as $elem)
        {
            return $elem;
        }
    }
}