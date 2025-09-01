<?php

use App\Http\Controllers\PracticeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::apiResource('/practices', PracticeController::class);
Route::get('practice/recent', [PracticeController::class, 'recentlyaccessed']);
