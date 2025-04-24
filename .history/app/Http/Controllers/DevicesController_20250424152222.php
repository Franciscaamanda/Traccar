<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class DevicesController extends Controller
{
    
    public static function getAccessToken(){
        $token = Http::withHeaders([
            'Content-Type' => 'application/x-www-form-urlencoded'
        ])->post('https://demo.traccar.org/api/session');

        return $token->status();
    }

    public static function getAllDevices(){

        $token = $this->getAccessToken(); 
        /*$response = Http::withHeaders([
            'Content-Type' => 'application/json'
        ])->get('https://demo.traccar.org/api/devices');

        return $response->body();*/
        return $token;
    }
}

?>