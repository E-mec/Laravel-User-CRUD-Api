<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::group([
    'middleware' => 'auth:sanctum'
], function () {
    Route::get('userprofile', [AuthController::class, 'userprofile']);
    Route::get('logout', [AuthController::class, 'logout']);
    Route::get('userResource', [AuthController::class, 'userResource']);
    Route::get('userResourceCollection', [AuthController::class, 'userResourceCollection']);
    Route::get('userCollection', [AuthController::class, 'userCollection']);
});
