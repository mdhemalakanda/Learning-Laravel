<?php
use App\Http\Controllers\UserInfo;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyCustomServiceController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/user-info', [UserInfo::class, 'user_info']);
Route::get('/notice', [UserInfo::class, 'get_notice']);
Route::get('/mycustomservice', [MyCustomServiceController::class, 'show_service']);