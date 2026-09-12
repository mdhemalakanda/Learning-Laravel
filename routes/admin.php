<?php

use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

// Route::prefix('hemal')->name('hemal')->middleware('auth')->group(function() {
//     Route::get('/', function() {
//         echo 'hemal';
//     });
// });

Route::prefix('student')->name('std.')->group(function () {
    Route::get('teacher/{name}', function (string $name) {
        return 'Teacher name: '.$name;
    })->name('teacher')->middleware('student_middleware');
});

Route::prefix('teacher')->name('teacher.')->group(function () {
    Route::get('register', [TeacherController::class, 'show_register_form'])->name('register');
    Route::post('/handle-teacher', [TeacherController::class, 'handle_teacher'])->name('create-teacher-acc');
});
