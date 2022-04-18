<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

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

Route::get('/'       , [HomeController::class, 'index'])->name('home');
Route::view('/about'  , 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');

Route::get('posts/{post}',
    [PostController::class, 'show'])->name('posts.show');

