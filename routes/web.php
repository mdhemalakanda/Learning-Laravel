<?php
use App\Http\Controllers\UserInfo;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/user-info', [UserInfo::class, 'user_info']);
Route::get('/notice', [UserInfo::class, 'get_notice']);