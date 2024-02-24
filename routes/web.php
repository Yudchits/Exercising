<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExerciseController;

// Show All Exercises
Route::get('/', [ExerciseController::class, 'index']);
