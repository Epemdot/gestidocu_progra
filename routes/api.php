<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('v1/empresas',App\Http\Controllers\Api\V1\EmpresasController::class);

Route::apiResource('v1/abogados',App\Http\Controllers\Api\V1\AbogadosController::class);

Route::apiResource('v1/ayudantes',App\Http\Controllers\Api\V1\AyudantesController::class);

Route::apiResource('v1/clientes',App\Http\Controllers\Api\V1\ClientesController::class);

Route::apiResource('v1/procesos',App\Http\Controllers\Api\V1\ProcesosController::class);
