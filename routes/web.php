<?php

use Illuminate\Support\Facades\Route;

Route::get('/main', function () {
    return view('paginas/main');
});
Route::get('/main-logado', function () {
    return view('paginas/main-logado');
});
Route::get('/login', function () {
    return view('paginas/login');
});
Route::get('/registro', function () {
    return view('paginas/registro');
});
Route::get('/perfil', function () {
    return view('paginas/perfil');
});
Route::get('/editar', function () {
    return view('paginas/editar-publicacao');
});
Route::get('/enviar', function () {
    return view('paginas/enviar-publicacao');
});
Route::get('/editar-perfil', function () {
    return view('paginas/editar-perfil');
});
Route::get('/confirmacaopub', function () {
    return view('paginas/confirmacao-pub');
});
Route::get('/confirmacaoperf', function () {
    return view('paginas/confirmacao-perf');
});
Route::get('/redef-email', function () {
    return view('paginas/redefsenha-email');
});
Route::get('/redef-senha', function () {
    return view('paginas/redefsenha');
});