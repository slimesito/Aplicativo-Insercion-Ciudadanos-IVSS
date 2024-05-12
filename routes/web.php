<?php

use App\Http\Controllers\CiudadanoController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/search', [CiudadanoController::class, 'search'] )->name('search');

Route::get('/show', function () {
    return view('show');
});

Route::get('/editar_ciudadano/{id}', [CiudadanoController::class, 'edit'])->name('edit.view');

Route::post('/update_ciudadano/{id}', [CiudadanoController::class, 'update'])->name('update');

Route::get('/registrar_ciudadano', function () {
    return view('create');
})->name('create');

Route::post('/store', [CiudadanoController::class, 'store'])->name('store');