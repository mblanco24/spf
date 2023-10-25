<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\AsociadoController;
use App\Http\Controllers\UserController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


/*
Route::get('/articulos', [ArticuloController::class,'index']); //muestra todos los registros
Route::post('/articulos', [ArticuloController::class,'store']); // crea un registro
Route::put('/articulos/{id}', [ArticuloController::class,'update']); // actualiza un registro
Route::delete('/articulos/{id}', [ArticuloController::class,'destroy']); //elimina un registro
*/

Route::get('/asociados', [AsociadoController::class,'index']); //muestra todos los registros
Route::post('/asociados', [AsociadoController::class,'store']); // crea un registro
Route::put('/asociados/{id}', [AsociadoController::class,'update']); // actualiza un registro
Route::delete('/asociados/{id}', [AsociadoController::class,'destroy']); //elimina un registro

Route::get('/users', [UserController::class,'index']); //muestra todos los registros
Route::post('/users', [UserController::class,'store']); // crea un registro
Route::put('/users/{id}', [UserController::class,'update']); // actualiza un registro
Route::delete('/users/{id}', [UserController::class,'destroy']); //elimina un registro
