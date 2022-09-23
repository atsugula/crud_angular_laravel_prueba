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
    Route::get('/elemento/{id}','show');
    Route::put('/elemento/{id}','update');
    Route::delete('/elemento/{id}','destroy');
    Route::get('/tipoElemento/{tipo}','findElemento');
});

Route::controller(TerceroController::class)->group(function(){
    Route::get('/terceros','index');
    Route::post('/tercero','store');
    Route::get('/tercero/{id}','show');
    Route::put('/tercero/{id}','update');
    Route::delete('/tercero/{id}','destroy');
});

Route::controller(TiposListaController::class)->group(function(){
    Route::get('/tipo-listas','index');
    Route::post('/tipo-lista','store');
    Route::get('/tipo-lista/{id}','show');
    Route::put('/tipo-lista/{id}','update');
    Route::delete('/tipo-lista/{id}','destroy');
});
