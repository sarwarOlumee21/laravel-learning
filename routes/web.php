<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\WelcomeController;
use App\Greeting;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\PrintContract;
use App\Models\Task;

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
Route::fallback(function(){
    return "Sorry, the page you are looking for could not be found.";
});

// this made for task
Route::resource('tasks',TaskController::class);
Route::get(
    '/contracts/{id}/print',
    PrintContract::class
);
// Route Model Binding
Route::get('tasks/{task}',function(Task $task){
    return $task;
});