<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/users', [UserController::class, 'index']);

Route::get('/users/{id}', [UserController::class, 'findUserById'])->where('id', '[1-9]+');

Route::post('/users', [UserController::class, 'store']);
