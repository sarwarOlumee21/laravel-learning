<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\FirstController;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/', [PaymentController::class, 'index']);
Route::get('/',[FirstController::class, 'firstLesson']);