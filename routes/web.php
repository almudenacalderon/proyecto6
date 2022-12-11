<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('encuentro', function() {
    return view('encuentro');
});

Route::get('contact', function() {
    return view('contact');
});


Route::get('about', function() {
    return view('about');
});

Route::get('thingsicando', function() {
    return view('thingsicando');
});

Route::get('afew', function() {
    return view('afew');
});
*/
Route::get('/', function () {
    return 'Esta es la página principal';
});
Route::get('login', function () {
    return 'Login usuario';
});
Route::get('logout', function () {
    return 'Logout usuario';
});
Route::get('productos', function () {
    return 'Listado productos';
});
//
Route::get('productos/show/{id}', function ($id) {
    return 'Vista detalle producto ' . $id;
});
Route::get('productos/create', function () {
    return 'Añadir producto';
});
Route::get('productos/edit/{id}', function ($id) {
    return 'Modificar producto ' . $id;
});
