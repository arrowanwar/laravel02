<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get ('/home',[HomeController::class, 'index']);
Route::get ('/user',[UserController::class, 'create']);
Route::get ('/usershow',[UserController::class, 'index']);
Route::get ('/usershow/{id}',[UserController::class, 'show']);
Route::get ('/usershow/{id}/delete',[UserController::class, 'delete']);
Route::get ('/usershow/{id}/edit',[UserController::class, 'edit']);
