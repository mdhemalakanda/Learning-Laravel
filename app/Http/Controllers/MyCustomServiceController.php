<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\MyCustomService;

class MyCustomServiceController extends Controller
{
    // public function show_service(MyCustomService $service) {
    //     echo $service->greet();
    // }

    public function show_service() {
        echo \App\Service\FacadesService::welcome('Hemal');
    }
    
    public function login() {
        return true;
    }
}
