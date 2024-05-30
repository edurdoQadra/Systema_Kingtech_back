<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MatrizController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\LocationController;


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

Route::group(['prefix' => 'v1'], function () {
    Route::get('/matrices', [MatrizController::class, 'index']);
    Route::post('/list', [MatrizController::class, 'store']);
    Route::get('/matriz/{id}', [MatrizController::class, 'show']); // Cambio de "{matriz}" a "{id}"
    Route::put('/matrices/{id}', [MatrizController::class, 'update']); // Cambio de "{matriz}" a "{id}"
    Route::delete('/matrices/{id}', [MatrizController::class, 'destroy']); // Cambio de "{matriz}" a "{id}"
});

Route::group(['prefix' => 'v2'], function () {
    Route::get('/matricestin', [MapController::class, 'mapTinbet']);
    Route::get('/matricesbet', [MapController::class, 'mapBetgana']);
});      


Route::group(['prefix' => 'v3'], function () {
    Route::get('/departments', [LocationController::class, 'departemts']);
    Route::get('/province/{department_id}', [LocationController::class, 'province']); // Se espera un ID de departamento
    Route::get('/district/{province_id}', [LocationController::class, 'district']); // Se espera un ID de provincia
});



// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
// Route::group(['prefix' => 'v1'], function () {
//     Route::get('/matrices', [MatrizController::class, 'index']);
//     Route::post('/matrices', [MatrizController::class, 'store']);
//     Route::get('/matriz/{id}', [MatrizController::class, 'show']); // Cambio de "{matriz}" a "{id}"
//     Route::put('/matrices/{id}', [MatrizController::class, 'update']); // Cambio de "{matriz}" a "{id}"
//     Route::delete('/matrices/{id}', [MatrizController::class, 'destroy']); // Cambio de "{matriz}" a "{id}"
// });
// Route::group(['prefix' => 'v2'], function () {
//     Route::get('/matricestin', [MapController::class, 'mapTinbet']);
//     Route::get('/matricesbet', [MapController::class, 'mapBetgana']);  
// });