<?php
namespace APP\Facades;
use Illuminate\Support\Facades\Facade;

class MyFacades extends Facade {
    protected static function getFacadeAccessor() {
        return 'facades_service';
    }
}