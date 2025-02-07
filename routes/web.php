<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

// Route::get('/', function () {
//     return view('/layouts/app');
// });


Route::get('/', [BlogController::class, 'index']);

// Route::get('/', [LoginController::class, 'index'])->name('login');
