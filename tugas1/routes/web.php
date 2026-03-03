<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BonusController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'home']);
Route::get('/profile', [ProfileController::class, 'profile']);
Route::get('/assignment', [AssignmentController::class, 'assignment']);
Route::get('/contact', [ContactController::class, 'contact']);
Route::get('/bonus', [BonusController::class, 'bonus']);