<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request){

        $array = $this->weather("https://api.openweathermap.org/data/2.5/forecast?q=".$request->city."&appid=c153494e41a68784f0391cd1d1de3727");
        $decode = json_decode($array, true);
        return view('data', ['data' => $decode])->render();

    }

    public function weather($url){

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

        $data = curl_exec($ch);

        curl_close($ch);

        return $data;

    }
}
