<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\Controller;
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

Route::get('/', function () {
    return view('hello');
});

//Calling Constructor
//Route::get('/user',[UserController::class,'index']);
//Route::get('/user/{name}','UserController@show');
//Route::get('/user/controller/{user}','testcontroller@loadview');
//Calling view
//Route::view('user','user');
//Route::get('user',function(){return view('user');});
Route::get('user/{name}',function($name){return view('user',['user'=>$name]);});
