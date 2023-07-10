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




Auth::routes();

// pages

Route::get('/main', [App\Http\Controllers\SiteController::class, 'main_page'])->name('main');

Route::get('/contact', [App\Http\Controllers\SiteController::class, 'contact_page'])->name('contact');

Route::get('/about', [App\Http\Controllers\SiteController::class, 'about_page'])->name('about');

Route::get('/projects', [App\Http\Controllers\SiteController::class, 'projects_page'])->name('projects');

Route::get('/project page/{title}', [App\Http\Controllers\SiteController::class, 'project_page'])->name('project page');

/////////////////////////////////////////////////////////////////////////

Route::post('/send', [App\Http\Controllers\EmailController::class, 'send'])->name('SendEmail');

