<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\MyCustomService;

class MyCustomServiceController extends Controller
{
    public function show_service(MyCustomService $service) {
        echo $service->greet();
    }
}
