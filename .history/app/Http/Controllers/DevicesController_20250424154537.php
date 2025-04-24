<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class DevicesController extends Controller
{
    
    public static function getAccessToken(){
        $token = Http::asForm()->post('https://demo.traccar.org/api/session', [
            'email' => 'franciscaamanda843@gmail.com',
            'password' => '925378',
        ]);

        return $token->body();
    }

    public static function getAllDevices(){

        $response = Http::asForm()->get('https://demo.traccar.org/api/devices', [
            'email' => 'franciscaamanda843@gmail.com',
            'password' => '925378',
        ]);

        return $response->body();
       
    }
}

?>