<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class DevicesController extends Controller
{
    public static function getAllDevices(){
        $response = Http::withHeaders([
            'Content-Type' => 'application/json'
        ])->get('https://demo4.traccar.org/api/devices');

        return $response->body();
    }
}

?>