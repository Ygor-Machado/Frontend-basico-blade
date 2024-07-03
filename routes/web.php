<?php

use App\Http\Controllers\BladeExamplesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blade', [BladeExamplesController::class, 'index']);
Route::get('/second-page', [BladeExamplesController::class, 'secondPage']);
