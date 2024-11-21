<?php

use Illuminate\Support\Facades\Route;

// Controller
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return view('layouts.app');
});

// Mahaiswa
Route::resource('/mahasiswa', MahasiswaController::class);
