<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LugaresController;
use App\Http\Controllers\HomeController;

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
Route::get('/', [HomeController::class, 'getHome']);

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/logout', function () {
    return 'Sesión cerrada correctamente';
});

Route::get('/lugares', [LugaresController::class, 'getIndex']);

Route::get('/lugares/show/{id}', [LugaresController::class, 'getShow']);

Route::get('/lugares/create', [LugaresController::class, 'getCreate']);

Route::get('/lugares/edit/{id}', [LugaresController::class, 'getEdit']);
