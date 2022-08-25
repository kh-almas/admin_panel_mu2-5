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



Route::get('/',[pageViewController::class,'index'])->name('index');

Route::resource('/library/images',ImagelibraryController::class);
Route::resource('/library/videos', VideolibraryController::class);

Route::view('/library/videossssssssss','backend.page.videos')->name('library.videos');
Route::view('/play/videos','backend.page.play-video')->name('play.video');
Route::get('/profile/settings', [pageViewController::class,'profile'])->name('profile.settings');
Route::view('/profile/update','backend.page.update-profile')->name('profile.update');
Route::view('/profile/view','backend.page.view-profile')->name('profile.view');



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

//unused route
//Route::resource('/users',userController::class);
//Route::get('/user/message/{user}',[userController::class,'singleUserMessage'])->name('user.singleUserMessage');
//Route::post('/user/message/{user}',[userController::class,'checkmail'])->name('checkmail');
//end unused route

Route::get('/user/backup',[userController::class,'backup'])->name('backup');



Route::view('/users/add','backend.page.new-user')->name('add.users');

Route::get('dashboard/tasks', [taskController::class, 'index'])->name('tasks.index');
Route::get('dashboard/tasks/create', [taskController::class, 'create'])->name('tasks.create');
Route::post('dashboard/tasks', [taskController::class, 'store'])->name('tasks.store');
Route::get('dashboard/tasks/{task}', [taskController::class, 'show'])->name('tasks.show');
Route::get('dashboard/tasks/{task}/edit', [taskController::class, 'edit'])->name('tasks.edit');
Route::put('dashboard/tasks/{task}', [taskController::class, 'update'])->name('tasks.update');
Route::delete('dashboard/tasks/{task}', [taskController::class, 'destroy'])->name('tasks.destroy');
Route::put('/tasks/is_important/{task}', [taskController::class,'importantTask'])->name('importantTask');


Route::get('dashboard/task/category', [taskCategoryController::class, 'index'])->name('category.index');
Route::post('dashboard/task/category', [taskCategoryController::class, 'store'])->name('category.store');
Route::put('dashboard/task/category/{category}', [taskCategoryController::class, 'update'])->name('category.update');
Route::delete('dashboard/task/category/{category}', [taskCategoryController::class, 'destroy'])->name('category.destroy');

//backend.page.settings
Route::get('/settings',[settingsController::class,'index'])->name('settings');
Route::put('/settings',[settingsController::class,'update'])->name('settings.update');

Route::resource('roles',roleController::class);

Route::post('/profile/settings', [pageViewController::class,'session'])->name('logoutsession');

Route::get('/access/info',[accessInfoController::class,'access_info'])->name('accessInfo');
Route::delete('/access/info/{info}',[accessInfoController::class,'delete_access_info'])->name('accessInfo.delete');

Route::get('/require-approve',[pageViewController::class,'is_approve'])->name('approve');
