<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class DevicesController extends Controller
{
    
    /*public static function getAccessToken(){
        $token = Http::post('/api/session?token=USER_TOKEN');
    }*/

    public static function getAllDevices(){
        $response = Http::withHeaders([
            'Content-Type' => 'application/json'
        ])->get('http://127.0.0.1:8082/api/devices');

        return $response->body();
    }
}

?>