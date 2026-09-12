<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\InvokeController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;

// Basic Admin Route
Route::get('/admin', function () {
    return 'its work for admin';
});

Route::get('/', function () {
    return view('welcome');
});

// Dynamic Route with Parameter
Route::get('/view-student/{id}', function (string $id) {
    return 'User ID: '.$id;
});

// Admin Group Routes (Prefix & Name)
Route::name('admin.')->prefix('learnhunter')->group(function () {

    Route::get('/dashboard', function () {
        return 'Welcome to the admin dashboard';
    })->name('dashboard');

    Route::get('/settings', function () {
        return 'Admin settings page';
    })->name('setting');

});

// Student Resource / CRUD Routes (IndexController)
Route::prefix('students')->name('students.')->group(function () {
    Route::get('/', [IndexController::class, 'index'])->name('index');
    Route::get('/create', [IndexController::class, 'create'])->name('create');
    Route::post('/store', [IndexController::class, 'store'])->name('store');
    Route::get('/{id}', [IndexController::class, 'show'])->name('show');
    Route::get('/{id}/edit', [IndexController::class, 'edit'])->name('edit');
    Route::put('/{id}', [IndexController::class, 'update'])->name('update');
    Route::delete('/{id}', [IndexController::class, 'destroy'])->name('destroy');
});

Route::resource('student', IndexController::class); // for crud operation

Route::get('/invoke', InvokeController::class);
Route::resource('resource', ResourceController::class);

// view class.
Route::get('/view-blade', [ViewController::class, 'show_info'])->name('view-blade');
