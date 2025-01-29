<?php

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

Route::get('/weight_logs', function () {
    return view('index');
});

Route::get('/weight_logs/1', function(){
    return view('edit');
});

Route::get('/weight_logs/goal_setting', function(){
    return view('edit2');
});

Route::get('/register/step1', function() {
    return view('register1');
});

Route::get('/register/step2', function() {
    return view('register2');
});

Route::get('/login', function(){
    return view('login');
});
