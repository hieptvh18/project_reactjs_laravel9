<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

Route::get('{any}', [HomeController::class,'__invoke'])->where('any', '.*');
