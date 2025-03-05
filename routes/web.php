<?php

use App\Http\Controllers\OficinasController;
use App\Http\Controllers\EmpleadosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('oficinas', OficinasController::class);
Route::resource('empleados', EmpleadosController::class);
Route::get('/oficinas/{id}/empleados/create', [EmpleadosController::class, 'create'])->name('empleados.create');
