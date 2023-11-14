<?php

use App\Http\Controllers\Api\Auth\AuthController;
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
Route::post('/login', [AuthController::class, 'auth']);
Route::post('/logout', [AuthController::class,'logout'])->middleware('auth:sanctun');
Route::post('/me', [AuthController::class,'me'])->middleware('auth:sanctun');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
