<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\NumberController;
use App\Http\Controllers\LogoutController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(RegisterController::class)->group(function(){
    Route::post('/register', 'register');
    Route::post('/login', 'login');
});


Route::group(['middleware'=>['auth:sanctum']],function(){
    Route::get('/get-all-gateway',[NumberController::class, 'getAllGateway']);
    Route::get('/getnumber',[NumberController::class, 'getNumber']);
    Route::post('/add-number',[NumberController::class, 'addNumber']);
    Route::post('/logout', [LogoutController::class, 'logout']);
});
