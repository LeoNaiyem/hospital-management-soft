<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.dashboard.home');
});

Route::resource('appointments', App\Http\Controllers\AppointmentController::class);