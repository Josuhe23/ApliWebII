<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;


Route::post('/login', [AuthController::class, 'login']);

Route:: middleware('auth:sanctum')->group(function(){
    Route::get('/user-profile',[AuthController::class, 'profile']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/user',[UserController::class, 'index']);
});

    //return $request->user();


