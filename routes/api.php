<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ElementosListaController;
use App\Http\Controllers\TerceroController;
use App\Http\Controllers\TiposListaController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(ElementosListaController::class)->group(function(){
    Route::get('/elementos','index');
    Route::post('/elemento','store');
    Route::get('/elementos/{id}','show');
    Route::put('/elementos/{id}','update');
    Route::delete('/elementos/{id}','destroy');
});

Route::controller(TerceroController::class)->group(function(){
    Route::get('/terceros','index');
    Route::post('/tercero','store');
    Route::get('/terceros/{id}','show');
    Route::put('/terceros/{id}','update');
    Route::delete('/terceros/{id}','destroy');
});

Route::controller(TiposListaController::class)->group(function(){
    Route::get('/tipo-listas','index');
    Route::post('/tipo-lista','store');
    Route::get('/tipo-listas/{id}','show');
    Route::put('/tipo-listas/{id}','update');
    Route::delete('/tipo-listas/{id}','destroy');
});
