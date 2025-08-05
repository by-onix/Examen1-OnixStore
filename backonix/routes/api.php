<?php

//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MarcasController;
use App\Http\Controllers\ProductoController;


// Rutas públicas
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
// metodos marca producto:
     Route::apiResource('marcas', MarcasController::class);
     Route::apiResource('productos', ProductoController::class);

// Rutas protegidas con Sanctum
//Route::middleware('auth:sanctum')->group(function () {
  //  Route::get('/user', [AuthController::class, 'user']);
    //Route::post('/logout', [AuthController::class, 'logout']);

    
//});
