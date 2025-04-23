<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class DevicesController extends Controller
{
    public static function getAllDevices(){
        /*$response = Http::get('https://www.traccar.org/devices');

        return $response->status();*/

        return "Devices";
    }
}

?>