<?php

use App\Http\Controllers\backend\taskCategoryController;
use App\Http\Controllers\backend\taskController;
use Illuminate\Support\Facades\Route;

//Task
Route::get('/task/category', [taskCategoryController::class, 'index'])->name('category.index');
Route::post('/task/category', [taskCategoryController::class, 'store'])->name('category.store');
Route::put('/task/category/{category}', [taskCategoryController::class, 'update'])->name('category.update');
Route::delete('/task/category/{category}', [taskCategoryController::class, 'destroy'])->name('category.destroy');
Route::get('/tasks', [taskController::class, 'index'])->name('tasks.index');
Route::get('/tasks/create', [taskController::class, 'create'])->name('tasks.create');
Route::post('/tasks', [taskController::class, 'store'])->name('tasks.store');
Route::get('/tasks/{task}', [taskController::class, 'show'])->name('tasks.show');
Route::get('/tasks/{task}/edit', [taskController::class, 'edit'])->name('tasks.edit');
Route::put('/tasks/{task}', [taskController::class, 'update'])->name('tasks.update');
Route::delete('/tasks/{task}', [taskController::class, 'destroy'])->name('tasks.destroy');
Route::put('/tasks/is_important/{task}', [taskController::class,'importantTask'])->name('importantTask');
