<?php

use App\Http\Controllers\BoxerController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('index');

Route::get('/boxers',[BoxerController::class,'index']);

Route::get('/create',[BoxerController::class,'create']);


Route::get('/boxers/{boxer}',[BoxerController::class,'show']);

Route::get ('/boxers/{boxer}/', [BoxerController::class,'show']);
Route::get ('/boxers_delete/{id}/', 'BoxerController::class@destroy');

