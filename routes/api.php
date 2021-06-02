<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\API\FincaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('registro',[UsuarioController::class,'registro']);

Route::post('acceso',[UsuarioController::class,'acceso']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
<<<<<<< HEAD
Route::get('fincas', [FincaController::class, 'index']);
// Route::get('fincas', [FincaController::class, 'update']);
// Route::get('fincas', [FincaController::class, 'store']);
// Route::get('fincas', [FincaController::class, 'destroy']);
// Route::get('fincas', [FincaController::class, 'show']);
=======
Route::get('fincas',[FincaController::class,'index']);
Route::post('fincas',[FincaController::class,'store']);
Route::put('fincas/{fincas}',[FincaController::class,'update']);
Route::get('fincas/{fincas}',[FincaController::class,'show']);
Route::delete('fincas/{fincas}',[FincaController::class,'destroy']);
>>>>>>> a27a472af0b715776f0038545e6f6be348e2cbae

/*
Route::get('/fincas', 'FincaController@index');

Route::put('/fincas/actualizar', 'FincaController@update');

Route::post('/fincas/guardar', 'FincaController@store');

Route::delete('/fincas/borrar/{id}', 'FincaController@destroy');

Route::get('/fincas/buscar', 'FincaController@show');
*/