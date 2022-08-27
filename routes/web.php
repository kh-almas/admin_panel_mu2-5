<?php

use App\Http\Controllers\backend\pageViewController;
use App\Http\Controllers\socialController;
use App\Models\Settings;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



//$settings = Settings::where('id', '1')->first();
//if ($settings->registration === 0){
//    Route::get('/register', function() {
//        return redirect()->route('login');
//    });
//}

Route::get('/require-approve',[pageViewController::class,'is_approve'])->name('approve');

// social media login/register link start
Route::get('/auth/google/redirect',[socialController::class,'googleRedirect'])->name('google.login');
Route::get('auth/google/callback',[socialController::class,'googleCallback']);

Route::get('/auth/facebook/redirect',[socialController::class,'facebookRedirect'])->name('facebook.login');
Route::get('/auth/facebook/callback',[socialController::class,'facebookCallback']);

Route::get('/auth/github/redirect',[socialController::class,'githubRedirect'])->name('github.login');
Route::get('/auth/github/callback',[socialController::class,'githubCallback']);

// social media login/register link end



Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::view('/check/sign-in','auth.jetdefaultlogin')->name('check.sign-in');
Route::view('/check/sign-up','auth.jetdefaultregister')->name('check.sign-up');

Route::post('/check',function (Request $request){
    return $request;
})->name('form.check');

