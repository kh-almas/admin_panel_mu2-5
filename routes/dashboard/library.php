<?php

use App\Http\Controllers\backend\ImagelibraryController;
use App\Http\Controllers\backend\VideolibraryController;
use Illuminate\Support\Facades\Route;


//Library
Route::get('/library/images', [ImagelibraryController::class, 'index'])->name('images.index');
Route::post('/library/images', [ImagelibraryController::class, 'store'])->name('images.store');
Route::put('/library/images/{image}', [ImagelibraryController::class, 'update'])->name('images.update');
Route::delete('/library/images/{image}', [ImagelibraryController::class, 'destroy'])->name('images.destroy');
Route::get('/library/videos', [VideolibraryController::class, 'index'])->name('videos.index');
Route::post('/library/videos', [VideolibraryController::class, 'store'])->name('videos.store');
Route::get('/library/videos/{video}', [VideolibraryController::class, 'show'])->name('videos.show');
Route::put('/library/videos/{video}', [VideolibraryController::class, 'update'])->name('videos.update');
Route::delete('/library/videos/{video}', [VideolibraryController::class, 'destroy'])->name('videos.destroy');
Route::view('/library/videossssssssss','backend.page.videos')->name('library.videos');
Route::view('/play/videos','backend.page.play-video')->name('play.video');
