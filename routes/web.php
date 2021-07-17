<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController AS BC;
use App\Http\Controllers\CommentController AS CC;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('blog', [BC::class, 'index'])->name('blog.index');
Route::get('blog/create', [BC::class, 'create'])->name('blog.create');
Route::post('blog/store', [BC::class, 'store'])->name('blog.store');
Route::get('blog/{blog}/edit', [BC::class, 'edit'])->name('blog.edit');
Route::get('blog/{blog}/show', [BC::class, 'show'])->name('blog.show');
Route::patch('blog/{blog}/update', [BC::class, 'update'])->name('blog.update');
Route::delete('blog/delete/{blog}', [BC::class, 'destroy'])->name('blog.destroy');


Route::get('comment', [CC::class, 'index'])->name('comment.index');
Route::get('comment/create', [CC::class, 'create'])->name('comment.create');
Route::post('comment/store', [CC::class, 'store'])->name('comment.store');
Route::get('comment/{com}/edit', [CC::class, 'edit'])->name('comment.edit');
Route::get('comment/{com}/show', [CC::class, 'show'])->name('comment.show');
Route::patch('comment/{com}/update', [CC::class, 'update'])->name('comment.update');
Route::delete('comment/delete/{com}', [CC::class, 'destroy'])->name('comment.destroy');
