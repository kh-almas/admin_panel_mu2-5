<?php

use App\Http\Controllers\api\v1\taskApiController;
use App\Http\Controllers\api\v1\taskCategoryApiController;
use Illuminate\Support\Facades\Route;

//Task Category
Route::get('/task/category/', [taskCategoryApiController::class, 'index']);
Route::post('/task/category/store', [taskCategoryApiController::class, 'store']);
Route::get('/task/category/{category}/show', [taskCategoryApiController::class, 'show']);
Route::put('/task/category/{category}/update', [taskCategoryApiController::class, 'update']);
Route::delete('/task/category/{category}/delete', [taskCategoryApiController::class, 'destroy']);

//Task
Route::get('/task/', [taskApiController::class, 'index']);
Route::post('/task/store', [taskApiController::class, 'store']);
Route::get('/task/{task}/show', [taskApiController::class, 'show']);
Route::put('/task/{task}/update', [taskApiController::class, 'update']);
Route::delete('/task/{task}/delete', [taskApiController::class, 'destroy']);
