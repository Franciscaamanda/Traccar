<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class DevicesController extends Controller
{
    
    public static function getId(){
        $id = Http::asForm()->post('https://demo.traccar.org/api/session', [
            'email' => 'franciscaamanda843@gmail.com',
            'password' => '925378',
        ]);

        return $id->body();
    }

    public static function getAllDevices(){
        //$id = self::getId();

        $response = Http:::withUrlParameters([
            'id' => '75263'
        ])->get('https://demo.traccar.org/api/devices');

        return $response->body();
       
    }
}

?>