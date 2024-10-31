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
Route::post('/mahasiswa/store', [MahasiswaController::class, 'store'])->name('mahasiswa.store');
Route::get('/mahasiswa/edit/{id}', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
Route::post('/mahasiswa/update/{id}', [MahasiswaController::class, 'update'])->name('mahasiswa.update');
Route::delete('/mahasiswa/destroy/{id}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.delete');
