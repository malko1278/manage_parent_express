<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExpressionController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('api')->group(function () {
    // Definition of API routes
    Route::post('/evaluate', [ExpressionController::class, 'evaluateExpression']);
});
