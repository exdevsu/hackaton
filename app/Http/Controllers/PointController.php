<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Point;
use App\Http\Api\NaviaddressApi as Navi;

class PointController extends Controller
{
    public function index()
    {
        // /*О каком ip ищем информацию*/
        // $ip = '93.159.238.226';
        //
        // /*получаем информацию о ip в виде xml-файла от сервиса ipgeobase.ru*/
        // $result = file_get_contents("http://ipgeobase.ru:7020/geo?ip=".$ip);
        //
        // header('Content-Type: text/html; charset=utf-8');
        //
        // /*Формируем DOM-структуру из полученного xml*/
        // $xml = new \SimpleXMLElement($result);
        // /*Выводим полученную информацию*/
        // echo "Информация об IP ".$xml->ip->attributes[0]."<br>";
        // echo "Сеть: ".$xml->ip->inetnum."<br>";
        // echo "Страна: ".$xml->ip->country."<br>";
        // echo "Город: ".$xml->ip->city."<br>";
        // echo "Область: ".$xml->ip->region."<br>";
        // echo "Округ: ".$xml->ip->district."<br>";
        // echo "Широта: ".$xml->ip->lat."<br>";
        // echo "Долгота: ".$xml->ip->lng."<br>";

        // $marker = Navi::createNaviaddress(55.6184941, 37.3158471, session('token'));
        //
        // if (!$marker) {
        //     return false;
        // }
        //
        // $point = new Point;
        // $point->container = $marker['result']['container'];
        // $point->naviaddress = $marker['result']['naviaddress'];
        // $point->save();

        return view('test');
    }
}
