<?php

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['middleware' => 'auth:sanctum'], function(){
    //All secure URL's
    Route::resource('/menu',App\Http\Controllers\MenuController::class);
    Route::post('/logout',[App\Http\Controllers\UserController::class,'logout']);
    });
Route::post("/login",[App\Http\Controllers\UserController::class,'login']);
Route::post("/register",[App\Http\Controllers\UserController::class, 'sign_up']);
