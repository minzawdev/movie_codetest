<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\MovieController;


Route::post('register', [UserController::class, 'register']);
Route::post('login', [UserController::class, 'login']);


Route::get('movies',[MovieController::class,'index']);
Route::get('movies/{movie}',[MovieController::class,'show']);

Route::middleware('auth:api')->group( function () {
    Route::resource('movies', MovieController::class)->only([
        'store', 'update','destroy'
    ]);
    Route::post('/movies/{movie}/comment', [MovieController::class, 'storeComment']);
});