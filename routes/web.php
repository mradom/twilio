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

Route::get('/', function () {
    //return view('welcome');
    return redirect('/post');
});

Route::get('/post', [App\Http\Controllers\PostController::class, 'index'])->name('post.index');
Route::get('/post/{post}', [App\Http\Controllers\PostController::class, 'show'])->name('post.show');
