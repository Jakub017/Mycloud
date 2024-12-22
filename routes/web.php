<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\AppController;
use App\Http\Controllers\DriveController;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function() {
    Route::controller(AppController::class)->group(function() {
        Route::get('/pulpit', 'dashboard')->name('dashboard');
        Route::get('/plany-cenowe', 'pricing')->name('pricing');
    });

    Route::controller(DriveController::class)->group(function() {
        Route::get('/dysk', 'index')->name('drive.index');
        Route::post('/wgraj', 'store')->name('drive.store');
    });
});

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return Inertia::render('Dashboard');
//     })->name('dashboard');
// });
