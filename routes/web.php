<?php

use App\Http\Controllers\BoxerController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', [HomeController::class, 'index']);

Route::get('/boxers',[BoxerController::class,'index'])->name('index');

Route::get('/create',[BoxerController::class,'create']);
Route::post('/boxers/',[BoxerController::class,'store']);


Route::get('/boxers/{boxer}',[BoxerController::class,'show']);

Route::get('/boxers/{boxer}/edit',[BoxerController::class,'edit'])->name('boxers.edit');
Route::patch('/boxers/{boxer}/',[BoxerController::class,'update']);

Route::get ('/boxers/{boxer}', [BoxerController::class,'show']);
Route::delete('/boxers/{boxer}', [BoxerController::class, 'destroy']);

