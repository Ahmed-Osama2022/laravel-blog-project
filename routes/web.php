<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
  return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


/**
 * NOTE:
 * Later we will collect all the types for routes for admin
 * in group -> middleware -> etc..
 */
Route::middleware(['auth'])->prefix('admins')->group(function () {
  Route::get('/', function () {
    return view('admin.index');
  })->name('admin.index');

  Route::get('/posts', function () {
    return view('admin.posts.index');
  })->name('admin.posts.index');
});

Route::resource('/posts', PostController::class);
