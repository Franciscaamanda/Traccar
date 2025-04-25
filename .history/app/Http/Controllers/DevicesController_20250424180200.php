<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class DevicesController extends Controller
{
    
    public static function getAllDevices(){

        $response = Http::withHeaders([
            'Content-Type'  => 'application/json' 
        ])->withBasicAuth(
            'franciscaamanda843@gmail.com',
            '925378'
        )->get('https://demo.traccar.org/api/devices');

        return $response->body();
       
    }
}

?>