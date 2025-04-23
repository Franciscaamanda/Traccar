<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class DevicesController extends Controller
{
    public static function getAllDevices(){
        $response = Http::get('https://www.traccar.org/devices')->header('Content-Type', 'application/json');

        return $response->body();
    }
}

?>