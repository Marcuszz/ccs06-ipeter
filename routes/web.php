<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstPeterController;


Route::get('/', [FirstPeterController::class, 'index']);
Route::get('/chapter/{chapter_number}', [FirstPeterController::class, 'readByChapter']);
Route::get('all-chapters', [FirstPeterController::class, 'readAllChapters']);