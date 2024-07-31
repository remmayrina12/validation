<?php

use App\Http\Controllers\UsertaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('user_task', UsertaskController::class);