<?php
use App\Http\Controllers\LugaresController;
use App\Http\Controllers\HomeController;
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
Route::get('/', [HomeController::class, 'getHome']);

Route::get('/lugares', [LugaresController::class, 'getIndex']);

Route::get('/lugares/show/{id}', [LugaresController::class, 'getShow'])->middleware(['auth']);

Route::get('/lugares/create', [LugaresController::class, 'getCreate'])->middleware(['auth']);

Route::post('/lugares/create', [LugaresController::class, 'store']);

Route::get('/lugares/edit/{id}', [LugaresController::class, 'getEdit'])->middleware(['auth']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
