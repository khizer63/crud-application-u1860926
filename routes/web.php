<?php

use App\Http\Controllers\BoxerController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/boxers',[BoxerController::class,'index']);

Route::get('/boxers/{boxer}',[BoxerController::class,'show']);

