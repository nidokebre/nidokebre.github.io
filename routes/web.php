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


Route::get('/', [App\Http\Controllers\MainController::class, 'index'])
    ->name('index');

Route::get('/people', [App\Http\Controllers\MainController::class, 'people'])
->name('people');

Route::get('/contact', [App\Http\Controllers\MainController::class, 'contact'])
->name('contact');

Route::get('/ongoing', [App\Http\Controllers\MainController::class, 'ongoing'])
->name('ongoing');

Route::get('/complete', [App\Http\Controllers\MainController::class, 'complete'])
->name('complete');

Route::get('/journals', [App\Http\Controllers\MainController::class, 'journals'])
->name('journals');

Route::get('/conferences', [App\Http\Controllers\MainController::class, 'conferences'])
->name('conferences');

Route::get('/awards', [App\Http\Controllers\MainController::class, 'awards'])
->name('awards');

Route::get('/intellectual', [App\Http\Controllers\MainController::class, 'intellectual'])
->name('intellectual');

Route::get('/commerce', [App\Http\Controllers\MainController::class, 'commerce'])
->name('commerce');

Route::get('/director', [App\Http\Controllers\MainController::class, 'director'])
->name('director');

Route::get('/phd', [App\Http\Controllers\MainController::class, 'phd'])
->name('phd');

Route::get('/interns', [App\Http\Controllers\MainController::class, 'interns'])
->name('interns');

Route::get('/alumni', [App\Http\Controllers\MainController::class, 'alumni'])
->name('alumni');

Route::get('/news', [App\Http\Controllers\MainController::class, 'news'])
->name('news');

Route::get('/archive', [App\Http\Controllers\MainController::class, 'archive'])
->name('archive');

Route::get('/researcher', [App\Http\Controllers\MainController::class, 'researcher'])
->name('researcher');
