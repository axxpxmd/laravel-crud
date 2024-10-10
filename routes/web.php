<?php

use Illuminate\Support\Facades\Route;

// Controller
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return view('layouts.app');
});

// Mahaiswa
Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
Route::get('/mahasiswa/create', [MahasiswaController::class, 'create'])->name('mahasiswa.create');

