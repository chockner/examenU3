<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('nosotros', 'nosotros')->name('nosotros');


Route::resource('servicios', 'App\Http\Controllers\ServiciosController')
    ->names('servicios');

Route::view('contacto', 'contacto')->name('contacto');

Route::view('clientes', 'clientes')->name('clientes');
Route::resource('clientes', 'App\Http\Controllers\ClientesController')
    ->names('clientes');
Route::view('proyectos', 'proyectos')->name('proyectos');
Route::view('blog', 'blog')->name('blog');
