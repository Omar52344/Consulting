<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacturasController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', [FacturasController::class, 'index'])->middleware('auth');
Route::get('/Nuevafactura', [FacturasController::class, 'create'])->middleware('auth')->name('nueva');
//Route::get('/facturas', [FacturasController::class, 'index']);
Route::post('/facturas', [FacturasController::class, 'store'])->middleware('auth');

Route::post('/editarfactura/{id}', [FacturasController::class, 'edit'])->middleware('auth');
Route::resource('facturas', FacturasController::class)->middleware('auth');

Route::get('/buscar', [FacturasController::class, 'buscar'])->middleware('auth')->name('buscar');

Route::post('/enviarbuscar', [FacturasController::class, 'enviarbuscar'])->middleware('auth');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
