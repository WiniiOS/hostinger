<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', [UserController::class, 'index'])->name('home');

Route::get('/sign-up', [UserController::class, 'register'])->name('register');

Route::get('*', [UserController::class, 'errorPage'])->name('error');
