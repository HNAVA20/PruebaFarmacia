<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('inicio'));

Route::get('/productos', fn () => view('productos'));

Route::get('/perfil', fn () => view('perfil'));

Route::get('/estado', function () {
    return view('estado');
});

Route::get('/administrar', function () {
    return view('administrar');
});

Route::get('/carrito', function () {
    return view('carrito');
});
