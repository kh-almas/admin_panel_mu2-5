<?php

use App\Http\Controllers\backend\accessInfoController;
use App\Http\Controllers\backend\pageViewController;
use App\Http\Controllers\backend\roleController;
use App\Http\Controllers\backend\settingsController;
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

require __dir__ . '/dashboard/task.php';
require __dir__ . '/dashboard/adminUserAction.php';
require __dir__ . '/dashboard/library.php';


//Page
Route::get('/',[pageViewController::class,'index'])->name('index');
Route::get('/require-approve',[pageViewController::class,'is_approve'])->name('approve');

//Profile
Route::get('/profile/settings', [pageViewController::class,'profile'])->name('profile.settings');
Route::post('/profile/settings', [pageViewController::class,'session'])->name('logoutsession');

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
