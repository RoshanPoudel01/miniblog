<?php

use App\Http\Controllers\HompageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LogoutController;


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



    
Route::get('/', [App\Http\Controllers\HomeController::class, 'show_post'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'show_post'])->name('home');
Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard',[HompageController::class,'show_post_dash'])->name('dashboard');

Route::get('/post', [App\Http\Controllers\PostController::class, 'index'])->name('post_index');
Route::post('/post', [App\Http\Controllers\PostController::class, 'create'])->name('post_create');
Route::get('/post/edit/{id}', [App\Http\Controllers\PostController::class, 'edit'])->name('post_edit');
Route::post('/post/edit/{id}', [App\Http\Controllers\PostController::class, 'update'])->name('post_update');
Route::get('/post/delete/{id}', [PostController::class, 'destroy'])->name('post_delete');
Route::get('/logout', [LogoutController::class,'perform'])->name('logout.perform');

});


