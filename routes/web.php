<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('inicio'));

Route::get('/productos', fn () => view('productos'));

Route::get('/carrito', function () {
    return view('carrito');
});

Route::get('/perfil', fn () => view('perfil'));

Route::get('/estado', function () {
    return view('estado');
});

Route::get('/administrar', function () {
    return view('administrar');
});



Route::get('/administrar', fn () => view('administrar')); // Productos
Route::get('/usuarios', fn () => view('usuarios'));
Route::get('/pedidos', fn () => view('pedidos'));
Route::get('/documentos', fn () => view('documentos'));


Route::get('/usuarios', fn () => view('usuarios'));
Route::get('/pedidos', fn () => view('pedidos'));
Route::get('/documentos', fn () => view('documentos'));