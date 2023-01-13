<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\RegisterController;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\PertanyaanController;
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

// default route
// new route
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/pertanyaan/{testId}',[PertanyaanController::class,'read']);
Route::post('/login', [LoginController::class,'login']);
Route::middleware('auth:sanctum')->get('user',[UserController::class,'index']);
//Route::post('/logout', App\Http\Controllers\Api\LogoutController::class)->name('logout');
// Ikutin yg atas klo mau bikin logoutnya
