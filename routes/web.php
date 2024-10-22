<?php

use App\Http\Controllers\BladeExamplesController;
use Illuminate\Support\Facades\Route;


Route::get('/blade', [BladeExamplesController::class, 'index']);
Route::get('/second-page', [BladeExamplesController::class, 'secondPage']);
Route::post('/store', [BladeExamplesController::class, 'store'])->name('send.store');
