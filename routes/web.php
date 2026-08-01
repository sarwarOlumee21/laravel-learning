<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\WelcomeController;
use App\Greeting;

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', function (){
//     return "This is a test for the first lesson";
// });
Route::get('/',[WelcomeController::class, 'index']);
// Route::get('/',[FirstController::class, 'firstLesson']);
Route::get('create-greeting', function (){
    $greeting = new Greeting;
    $greeting->body = "Hello, World!";
    $greeting->save();
});

Route::get('first-greeting',function(){
    return Greeting::first()->body;
});