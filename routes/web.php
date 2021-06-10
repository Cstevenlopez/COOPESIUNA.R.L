<?php

use App\Models\Uso_de_tierra;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/contacto', [App\Http\Controllers\ContactoController::class, 'index'])->name('contacto');

Route::resource('/usuarios','App\Http\Controllers\UserController');
Route::resource('/fincas','App\Http\Controllers\FincaController');
Route::resource('/productores','App\Http\Controllers\ProductorController');
Route::resource('/tierras','App\Http\Controllers\UsoTierraController');
Route::resource('/vitacoras','App\Http\Controllers\vitacoraController');

