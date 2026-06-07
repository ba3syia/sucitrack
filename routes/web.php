<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PrayerController;
use App\Http\Controllers\MenstrualController;
use App\Http\Controllers\QadaController;
use App\Http\Controllers\CalendarController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('landing');
});

Route::middleware(['auth', 'verified'])->group(function () {

    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');

    //Calendar
    Route::get('/calendar', [CalendarController::class, 'index'])
        ->middleware('auth')
        ->name('calendar.index');

    Route::get('/calendar/events', [CalendarController::class, 'events'])
        ->middleware('auth')
        ->name('calendar.events');

    // Menstrual Records
    Route::get('/menstrual_\records/end', [MenstrualController::class, 'endCycle'])
        ->name('menstrual_records.end');

    Route::resource('menstrual_records', MenstrualController::class);

    // Qada page
    Route::get('/qada', [QadaController::class, 'index'])
        ->name('qada.index');

    // Toggle complete / pending
    Route::patch('/qada/{id}/toggle', [QadaController::class, 'toggle'])
        ->name('qada.toggle');

    });

require __DIR__.'/auth.php';