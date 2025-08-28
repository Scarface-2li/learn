<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\SessionUserController;
use App\Http\Controllers\RegisterUserController;

Route::view('/','home');

Route::resource('/jobs',JobController::class);

Route::get('register',[ RegisterUserController::class,'create']);
Route::post('register',[ RegisterUserController::class,'store']);

Route::get('login',[ SessionUserController::class,'create']);
Route::post('login',[ SessionUserController::class,'store']);
Route::post('logout',[ SessionUserController::class,'destroy']);


Route::view('/contact','contact');
