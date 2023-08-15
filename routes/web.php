<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Models\User;
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

 Route::get('/', function () {
     return view('welcome');
 });

Route::get('user', function () {
    $users = User::all();
    return view('user.index', ['users'=>$users]);
});
Route::get('post', function(){
    $data = [
     'title'=> 'Welcome to Dhaka',
     'description' => 'lorem imsum',
     'status' => 1,
     'user_id' => 1
       ];
       App\Models\Posts::create($data);
});
Route::get('one-to-one',function(){
    $user = User::find(1);
    dd($user);
});
