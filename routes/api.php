<?php

use App\Models\User;
use Illuminate\Http\Request;
<<<<<<< HEAD
use Illuminate\Support\Facades\DB;
=======
use Illuminate\Support\Facades\Hash;
>>>>>>> d8d45de93997e91588cc455c636ee34152484489
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

use App\Http\Controllers\API\FincaController;
use Illuminate\Validation\ValidationException;
use App\Http\Controllers\API\vitacoraController;
use App\Http\Controllers\API\ProductorController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('fincas',[FincaController::class,'index']);
Route::post('fincas',[FincaController::class,'store']);
Route::put('fincas/{finca}',[FincaController::class,'update']);
Route::get('fincas/{finca}',[FincaController::class,'show']);
Route::delete('fincas/{finca}',[FincaController::class,'destroy']);

Route::get('productores',[ProductorController::class,'index']);
Route::post('productores',[ProductorController::class,'store']);
Route::put('productores/{productor}',[ProductorController::class,'update']);
Route::get('productores/{productor}',[ProductorController::class,'show']);
Route::delete('productores/{productor}',[ProductorController::class,'destroy']);

Route::post('login',[LoginController::class,'login']);
Route::post('logout',[LoginController::class,'logout']);



Route::get('/bitacoras/{usuario}',function($usuario){
    $bitacoras = DB::table('vitacora_asistencias')
    ->join('users','vitacora_asistencias.usuario_id','=','users.id_usuario')
    ->select('vitacora_asistencias.*')
    ->where('users.email',$usuario)
    ->get();

    return response()->json([
        'data' => $bitacoras
    ]);
});






<<<<<<< HEAD
Route::get('vitacoras',[VitacoraController::class,'index']);
Route::post('vitacoras',[VitacoraController::class,'store']);
Route::put('vitacoras/{vitacora}',[VitacoraController::class,'update']);
Route::get('vitacoras/{vitacora}',[VitacoraController::class,'show']);
Route::delete('vitacoras/{vitacora}',[VitacoraController::class,'destroy']);

Route::get('register',[RegisterController::class,'register']);
=======
Route::get('vitacoras',[vitacoraController::class,'index']);
Route::post('vitacoras',[vitacoraController::class,'store']);
Route::put('vitacoras/{vitacora}',[vitacoraController::class,'update']);
Route::get('vitacoras/{vitacora}',[vitacoraController::class,'show']);
Route::delete('vitacoras/{vitacora}',[vitacoraController::class,'destroy']);
// HOLA

>>>>>>> d8d45de93997e91588cc455c636ee34152484489



Route::post('/sanctum/token', function (Request $request) {
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
       // 'device_name' => 'required',
    ]);

    $user = User::where('email', $request->email)->first();

    if (! $user || ! Hash::check($request->password, $user->password)) {
        throw ValidationException::withMessages([
            'email' => ['The provided credentials are incorrect.'],
        ]);
    }

    $token = $user->createToken($request->device_name)->plainTextToken;

    $response = [
            'user' => $user,
            'token' => $token,
    ];

    return response($response, 201);
});
/*

Route::get('/fincas', 'FincaController@index');

Route::put('/fincas/actualizar', 'FincaController@update');

Route::post('/fincas/guardar', 'FincaController@store');

Route::delete('/fincas/borrar/{id}', 'FincaController@destroy');

Route::get('/fincas/buscar', 'FincaController@show');
*/