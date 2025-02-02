<?php

use App\Http\Controllers\WeightLogsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return redirect('/weight_logs');
});

Route::middleware('auth')->group(function(){

    Route::get('/weight_logs', [WeightLogsController::class, 'index']);

    Route::get('/weight_logs/search', [WeightLogsController::class, 'search']);

    Route::post('/weight_logs/create', [WeightLogsController::class, 'store']);

    Route::get('/weight_logs/goal_setting', [WeightLogsController::class, 'targetEdit']);

    Route::post('/weight_logs/goal_setting', [WeightLogsController::class, 'targetUpdate']);

    Route::get('/weight_logs/{weightLogId}', [WeightLogsController::class, 'edit']);

    Route::post('/weight_logs/{weightLogId}/update', [WeightLogsController::class, 'update']);

    Route::post('/weight_logs/{weightLogId}/delete', [WeightLogsController::class, 'destroy']);

    Route::get('/register/step2', function() {
        return view('register2');
    });
});

