<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group "demo" route prefix
| and "demo." name prefix. Now create something great!
|
*/


Route::view('/bootstrap-table','backend.examples.page.bootstrap-tables')->name('bootstrap-tables');
Route::view('/data-table','backend.examples.page.data-tables')->name('data-tables');
Route::view('/sign-in','backend.examples.page.sign-in')->name('sign-in');
Route::view('/sign-up','backend.examples.page.sign-up')->name('sign-up');
Route::view('/forgot-password','backend.examples.page.forgot-password')->name('forgot-password');
Route::view('/reset-password','backend.examples.page.reset-password')->name('reset-password');
Route::view('/lock','backend.examples.page.lock')->name('lock');
Route::view('/404','backend.examples.page.404')->name('404');
Route::view('/500','backend.examples.page.500')->name('500');
Route::view('/buttons','backend.examples.page.buttons')->name('buttons');
Route::view('/notifications','backend.examples.page.notifications')->name('notifications');
Route::view('/forms','backend.examples.page.forms')->name('forms');
Route::view('/modals','backend.examples.page.modals')->name('modals');
Route::view('/typography','backend.examples.page.typography')->name('typography');



Route::view('/profile/view','backend.example.page.view-profile')->name('profile.view');
Route::view('/jetdefaultregister','auth.jetdefaultregister')->name('jetdefaultregister');
