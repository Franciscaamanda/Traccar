<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class DevicesController extends Controller
{
    public static function getAllDevices(){
        $response = Http::withHeaders([
            'Content-Type' => 'application/json'
        ])->get('https://46.101.24.212/api/devices');

        return $response->body();
    }
}

?>