<?php

use App\Http\Controllers\backend\accessInfoController;
use App\Http\Controllers\backend\ImagelibraryController;
use App\Http\Controllers\backend\makeUserByAdmin;
use App\Http\Controllers\backend\pageViewController;
use App\Http\Controllers\backend\roleController;
use App\Http\Controllers\backend\sendMessageToAllUserController;
use App\Http\Controllers\backend\sendMessageToGroupUserController;
use App\Http\Controllers\backend\sendMessageToSingleUserController;
use App\Http\Controllers\backend\settingsController;
use App\Http\Controllers\backend\taskCategoryController;
use App\Http\Controllers\backend\taskController;
use App\Http\Controllers\backend\updateUserinfoByAdminController;
use App\Http\Controllers\backend\userController;
use App\Http\Controllers\backend\VideolibraryController;
use App\Http\Controllers\backend\viewForUserFromAdmin;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" , "auth" middleware group "admin" route prefix
| and "admin." name prefix. Now create something great!
|dashboard.
*/

//Page
Route::get('/',[pageViewController::class,'index'])->name('index');
Route::get('/require-approve',[pageViewController::class,'is_approve'])->name('approve');

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

//Profile
Route::get('/profile/settings', [pageViewController::class,'profile'])->name('profile.settings');
Route::post('/profile/settings', [pageViewController::class,'session'])->name('logoutsession');

//User in admin
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

//App settings
Route::get('/settings',[settingsController::class,'index'])->name('settings');
Route::put('/settings',[settingsController::class,'update'])->name('settings.update');

//Roles
Route::get('/roles', [roleController::class, 'index'])->name('roles.index');
Route::post('/roles', [roleController::class, 'store'])->name('roles.store');
Route::put('/roles/{role}', [roleController::class, 'update'])->name('roles.update');
Route::delete('/roles/{role}', [roleController::class, 'destroy'])->name('roles.destroy');

//User access info
Route::get('/access/info',[accessInfoController::class,'access_info'])->name('accessInfo');
Route::delete('/access/info/{info}',[accessInfoController::class,'delete_access_info'])->name('accessInfo.delete');

