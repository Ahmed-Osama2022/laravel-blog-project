<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
  ->name('home');
Route::get('/home/post/{post}', [App\Http\Controllers\HomeController::class, 'getPost'])
  ->name('home.post');
Route::get('/home/about', [App\Http\Controllers\HomeController::class, 'about'])
  ->name('home.about');
Route::get('/home/contact', [App\Http\Controllers\HomeController::class, 'contact'])
  ->name('home.contact');
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

Route::get('/blogs', function () {
  return view('partials.home');
});

/**
 * For just delete some records from the DB
 */
Route::get('/delete', function () {
  // $posts_num = DB::table('posts')->count();

  // $query = DB::table('posts')
  // ->whereBetween('id', [$posts_num / 2, $posts_num])
  // ->delete();

  $comments_num = DB::table('comments')->count();

  $query = DB::table('comments')
    ->whereBetween('id', [$comments_num / 2, $comments_num])
    ->delete();

  dd($query);
});
