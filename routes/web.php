<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
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
    return view('home');
});
// Rutas controlador de login 
Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');
});
// Rutas de post y comentarios
Route::delete('/commentdel/{comment}', [CommentController::class,'destroy'])->name('comment.destroy')->middleware("auth");
Route::delete('/postdel/{post}', [PostController::class,'destroy'])->name('post.destroy')->middleware("auth");
Route::post('/category', [PostController::class,'filter'])->name('post.category');
Route::resource('posts', PostController::class);
Route::resource('posts.comments', CommentController::class);
