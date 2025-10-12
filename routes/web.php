<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Rutas de Solicitudes
Route::get('/solicitudes/formulario', function () {
    return view('solicitudes.formulario-solicitud');
})->name('solicitudes.formulario');

Route::post('/solicitudes', function () {
    // Aquí se procesará el formulario más adelante
    return redirect()->back()->with('success', 'Solicitud enviada correctamente');
})->name('solicitudes.store');
