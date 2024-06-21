<?php

use App\Http\Controllers\CargoController;
use App\Http\Controllers\ClinicaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/users', [UserController::class, 'index'])->name('users.index');
//DEMAS FUNCIONALIDADES DE USERS

Route::get('/clinicas', [ClinicaController::class, 'index'])->name('clinicas.index');
//DEMAS FUNCIONALIDADES DE CLINICAS

Route::get('/cargos', [CargoController::class, 'index'])->name('cargos.index');
//DEMAS FUNCIONALIDADES DE CARGOS

require __DIR__.'/auth.php';
