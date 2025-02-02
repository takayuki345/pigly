<?php

use App\Http\Controllers\WeightLogsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return redirect('/weight_logs');
});

Route::middleware('auth')->group(function(){

    // Route::get('/weight_logs', function () {
    //     return view('index');
    // });
    Route::get('/weight_logs', [WeightLogsController::class, 'index']);

    Route::get('/weight_logs/search', [WeightLogsController::class, 'search']);

    Route::get('/weight_logs/1', function(){
        return view('edit');
    });

    Route::get('/weight_logs/goal_setting', function(){
        return view('edit2');
    });

    Route::get('/register/step2', function() {
        return view('register2');
    });
});

// Route::get('/register/step1', function() {
//     return view('auth.register1');
// });

// Route::get('/login', function(){
//     return view('auth.login');
// });

