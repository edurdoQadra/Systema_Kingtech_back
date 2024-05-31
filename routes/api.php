<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MatrizController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\TransactionController;


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
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Controlador modelo clientes
Route::group(['prefix' => 'v1'], function () {
    Route::get('/clients', [MatrizController::class, 'index']);
    Route::post('/create', [MatrizController::class, 'store']);
    Route::get('/client/{id}', [MatrizController::class, 'show']); // Cambio de "{matriz}" a "{id}"
    Route::put('/client/{id}', [MatrizController::class, 'update']); // Cambio de "{matriz}" a "{id}"
    Route::delete('/delete/{id}', [MatrizController::class, 'destroy']); // Cambio de "{matriz}" a "{id}"     
});

// Controlador modelo Mapas
Route::group(['prefix' => 'v2'], function () {
    Route::get('/matricestin', [MapController::class, 'mapTinbet']);
    Route::get('/matricesbet', [MapController::class, 'mapBetgana']);
});      

// Controlador modelo Ubigeo
Route::group(['prefix' => 'v3'], function () {
    Route::get('/departments', [LocationController::class, 'index']);
    Route::get('/province/{department_id}', [LocationController::class, 'province']); // Se espera un ID de departamento
    Route::get('/district/{province_id}', [LocationController::class, 'district']); // Se espera un ID de provincia
});

// Controlador modelo clientes
Route::group(['prefix' => 'v4'], function () {
    Route::get('/transactions', [TransactionController::class, 'index']); 
    Route::post('/create', [TransactionController::class, 'store']);
    Route::get('/transaction/{id}', [TransactionController::class, 'show']); // Cambio de "{matriz}" a "{id}"
    Route::put('/transaction/{id}', [TransactionController::class, 'update']); // Cambio de "{matriz}" a "{id}"
    Route::delete('/delete/{id}', [TransactionController::class, 'destroy']); // Cambio de "{matriz}" a "{id}"
});


