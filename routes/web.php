<?php

use App\Http\Controllers\FincaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VitController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\vitacoraController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsoTierraController;
use App\Http\Controllers\ProductorController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => ['auth']], function(){
    Route::resource('/roles', RolController::class);
    Route::resource('/usuarios', UserController::class);
    Route::resource('/fincas', FincaController::class);
    Route::resource('/productores',ProductorController::class);
    Route::resource('/tierras',UsoTierraController::class);
    Route::resource('/vitacoras',vitacoraController::class);
});

Route::get('/vitacoras/{vitacora}', [vitacoraController::class, 'download'])->name('vitacoras.download');
Route::get('/vitacoras-print-pdf/{vitacora}', [vitacoraController::class, 'printPDF'])->name('vitacoras.print');




Route::get('/get-all-logs',[VitController::class,'getAllLogs']);
Route::get('/download-pdf', [VitController::class, 'downloadPDF']);
