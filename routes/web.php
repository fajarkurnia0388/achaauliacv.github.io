<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CvController;

Route::get('/cv', [CvController::class, 'index']);
