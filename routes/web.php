<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('dashboard');
})->name('home');

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard');

// Rutas de Solicitudes
Route::get('/solicitudes/formulario', function () {
    return view('solicitudes.formulario-solicitud');
})->name('solicitudes.formulario');

Route::get('/solicitudes/listado', function () {
    return view('solicitudes.listado');
})->name('solicitudes.listado');

Route::post('/solicitudes', function () {
    // Aquí se procesará el formulario más adelante
    return redirect()->back()->with('success', 'Solicitud enviada correctamente');
})->name('solicitudes.store');

// Rutas de Donaciones
Route::get('/donaciones/listado', function () {
    return view('donaciones.listado');
})->name('donaciones.listado');

// Ruta de Seguimiento
Route::get('/seguimiento', function () {
    return view('seguimiento.index');
})->name('seguimiento');

    // Rutas de Autenticación
    Route::get('/login', function () {
        return view('auth.login');
    })->name('login');

    Route::post('/login', function () {
        // Aquí se procesará el login más adelante
        return redirect()->route('dashboard')->with('success', 'Inicio de sesión exitoso');
    })->name('login.post');

    Route::get('/register', function () {
        return view('auth.register');
    })->name('register');

    Route::post('/register', function () {
        // Aquí se procesará el registro más adelante
        return redirect()->route('login')->with('success', 'Cuenta creada exitosamente');
    })->name('register.post');
