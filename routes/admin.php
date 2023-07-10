<?php

use Illuminate\Support\Facades\Route;

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


//home
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.home');

/////////////////////////////////////////////////////////////////////////
/// 
Route::get('/Main Image Control/{id}', [App\Http\Controllers\ImageController::class, 'main_image_index'])->name('admin.Main_Image_Control');

Route::post('/Main Image Uplode/{id}', [App\Http\Controllers\ImageController::class, 'store_main_image'])->name('admin.Main_Image_Uplode');

///////////////
Route::view('/projects', 'admin.projects')->name('admin.projects')->middleware('auth');

Route::view('/help', 'admin.help')->name('admin.documentation')->middleware('auth');

Route::get('/SiteInfo', [App\Http\Controllers\InfoController::class, 'site_info_page'])->name('admin.site_info');

Route::post('/SiteInfoUpdate', [App\Http\Controllers\InfoController::class, 'update_info'])->name('admin.site_info_update');

//////////
Route::post('/Store', [App\Http\Controllers\ProjectController::class, 'store'])->name('admin.store');


///////////
//account
Route::get('/update_password', 'App\Http\Controllers\AccountController@update_password_page')->name('update_password_page');
Route::post('/update', 'App\Http\Controllers\AccountController@update_password')->name('update_password');

Route::get('/logout', [App\Http\Controllers\AccountController::class, 'logout'])->name('admin.logout');


