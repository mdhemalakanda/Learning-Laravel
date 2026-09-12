<?php

use App\Providers\AppServiceProvider;
use App\Providers\FacadesServiceProvider;
use App\Providers\MyCustomServiceProvider;
use App\Providers\TeacherServiceProvider;
use App\Providers\viewProvider;

return [
    AppServiceProvider::class,
    FacadesServiceProvider::class,
    MyCustomServiceProvider::class,
    TeacherServiceProvider::class,
    viewProvider::class,
];
