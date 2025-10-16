<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// the me route to get my details
Route::get('/me', [ProfileController::class, 'getProfile']);
