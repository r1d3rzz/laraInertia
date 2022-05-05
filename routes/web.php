<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PageController::class,'home']);

Route::get('/login', [AuthController::class,'login'])->middleware('guest')->name('login');
Route::post('/login', [AuthController::class,'postLogin'])->middleware('guest');
Route::get('/register', [AuthController::class,'register'])->middleware('guest');
Route::post('/register', [AuthController::class,'postRegister'])->middleware('guest');
Route::get('/logout', [AuthController::class,'logout'])->middleware('auth');
Route::get('/profile/edit', [AuthController::class,'profileEdit'])->middleware('auth');
Route::post('/profile/{user:email}/edit/', [AuthController::class,'postProfileEdit'])->middleware('auth');
Route::get('/question/detail', [QuestionController::class,'show']);
