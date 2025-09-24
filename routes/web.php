<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CvController;

Route::get('/', [CvController::class, 'index']);
Route::get('/cv', [CvController::class, 'index']);
Route::get('/download-cv', [CvController::class, 'downloadPdf'])->name('download-cv');
Route::get('/download-html', [CvController::class, 'downloadHtml'])->name('download-html');
