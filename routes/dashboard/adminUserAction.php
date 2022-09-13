<?php

use App\Http\Controllers\backend\makeUserByAdmin;
use App\Http\Controllers\backend\permissionController;
use App\Http\Controllers\backend\roleController;
use App\Http\Controllers\backend\sendMessageToAllUserController;
use App\Http\Controllers\backend\sendMessageToGroupUserController;
use App\Http\Controllers\backend\sendMessageToSingleUserController;
use App\Http\Controllers\backend\updateUserinfoByAdminController;
use App\Http\Controllers\backend\userController;
use App\Http\Controllers\backend\viewForUserFromAdmin;
use Illuminate\Support\Facades\Route;

//Roles
Route::get('/roles', [roleController::class, 'index'])->name('roles.index');
Route::post('/roles', [roleController::class, 'store'])->name('roles.store');
Route::put('/roles/{role}', [roleController::class, 'update'])->name('roles.update');
Route::delete('/roles/{role}', [roleController::class, 'destroy'])->name('roles.destroy');

Route::put('/roles/permission/{role}', [permissionController::class, 'permission'])->name('roles.permission.update');
Route::put('/user/roles/{user}', [permissionController::class, 'role'])->name('user.roles.update');
Route::get('/abcd', [permissionController::class, 'check_permission']);


//User action in admin
Route::get('/users',[viewForUserFromAdmin::class,'index'])->name('users');
Route::get('/users/update/{user}',[viewForUserFromAdmin::class,'viewUpdateUserForm'])->name('showUpdateUserFormByAdmin');
Route::put('/users/update/{user}',[updateUserinfoByAdminController::class,'updateGeneralInfoByAdmin'])->name('UpdateUserFormByAdmin');
Route::delete('/users/logout/{user}',[updateUserinfoByAdminController::class,'logoutFromAdmin'])->name('userLogoutByAdmin');
Route::get('/user/create',[viewForUserFromAdmin::class,'createUser'])->name('viewForMakeUserByAdmin');
Route::post('/user/create',makeUserByAdmin::class)->name('makeUserByAdmin');
Route::get('/user/send-mail-to-single-user/{user}',[viewForUserFromAdmin::class,'sendMessageToSingleUser'])->name('viewSendMessageToSingleUser');
Route::post('/user/send-mail-to-single-user/{user}',sendMessageToSingleUserController::class)->name('sendMessageToSingleUser');
Route::get('/user/send-mail-to-group-user',[viewForUserFromAdmin::class,'sendMessageToGroupUser'])->name('viewSendMessageToGroupUser');
Route::post('/user/send-mail-to-group-user',sendMessageToGroupUserController::class)->name('sendMessageToGroupUser');
Route::get('/user/send-mail-to-all-user',[viewForUserFromAdmin::class,'sendMessageToAllUser'])->name('viewSendMessageToAllUser');
Route::post('/user/send-mail-to-all-user',sendMessageToAllUserController::class)->name('sendMessageToAllUser');
Route::get('/user/backup',[userController::class,'backup'])->name('backup');

