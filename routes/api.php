<?php

use App\Http\Controllers\Api\QuestionController;
use App\Http\Controllers\Api\QuizAttemptController;

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


Route::get('questions', [QuestionController::class, 'index']);

Route::post('quiz', [QuizAttemptController::class, 'store']);




