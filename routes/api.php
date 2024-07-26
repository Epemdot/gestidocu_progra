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

Route::apiResource('v1/empresa',App\Http\Controllers\Api\V1\EmpresaController::class);

Route::apiResource('v1/abogado',App\Http\Controllers\Api\V1\AbogadoController::class);

Route::apiResource('v1/ayudante',App\Http\Controllers\Api\V1\AyudanteController::class);

Route::apiResource('v1/cliente',App\Http\Controllers\Api\V1\ClienteController::class);

Route::apiResource('v1/proceso',App\Http\Controllers\Api\V1\ProcesoController::class);
