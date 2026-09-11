<?php
use Illuminate\Support\Facades\Route;
use APP\HTTP\Controllers\AdminController;

// Route::prefix('hemal')->name('hemal')->middleware('auth')->group(function() {
//     Route::get('/', function() {
//         echo 'hemal';
//     });
// });

Route::prefix('student')->name('std.')->group(function() {
    Route::get('teacher/{name}', function(string $name) {
        return 'Teacher name: '. $name;
    })->name('teacher');
});