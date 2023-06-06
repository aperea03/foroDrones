<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;

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
// Rutas controlador de login y registro
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
Route::delete('/postedit/{post}', [PostController::class,'edit'])->name('post.edit')->middleware("auth");
Route::post('/posts/category', [PostController::class,'filter'])->name('posts.category');
Route::resource('posts', PostController::class);
Route::resource('posts.comments', CommentController::class);

// Rutas ajustes de usuario
Route::get('/usersettings', [UserController::class,'index'])->name('user.index')->middleware("auth");
Route::post('/usersettings/{user}/posts', [UserController::class,'showposts'])->name('user.posts')->middleware("auth");
Route::post('/usersettings/{user}/comments', [UserController::class,'showcomments'])->name('user.comments')->middleware("auth");