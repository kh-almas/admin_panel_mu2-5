<?php

use App\Http\Controllers\api\v1\taskCategoryApiController;
use Illuminate\Support\Facades\Route;

//Task Category
Route::get('/task/category/', [taskCategoryApiController::class, 'index']);
Route::post('/task/category/store', [taskCategoryApiController::class, 'store']);
Route::get('/task/category/{task_category}/edit', [taskCategoryApiController::class, 'show']);