<?php

use App\Http\Controllers\CineController;
use App\Http\Controllers\DistritoController;
use App\Http\Controllers\GeneroController;
use App\Http\Controllers\PeliculaController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


    Route::resource('admin/distrito', DistritoController::class);
    Route::resource('admin/genero', GeneroController::class);
    Route::resource('admin/cine', CineController::class);
    Route::resource('admin/pelicula', PeliculaController::class);
});

Route::controller(PublicController::class)->group( function() {

    Route::get("/peliculas/{id}", "peliculas");
    Route::get("/pelicula/{id}", "pelicula");
    Route::get("/cines", "cines");
    Route::get("/cine/{id}", "cine");


});

