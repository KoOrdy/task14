<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('add_users',[UserController::class , 'adduser']);

Route::get('home', [UserController::class, 'home']);
