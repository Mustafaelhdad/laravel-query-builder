<?php

use App\Http\Controllers\PostController;
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

Route::get('/posts', [PostController::class, 'index'])->name('posts');

Route::get('/posts/create', [PostController::class, 'create']);

Route::post('/posts/insert', [PostController::class, 'insert'])->name('post.insert');

Route::get('/posts/edit/{id}', [PostController::class, 'edit'])->name('post.edit');

Route::put('/posts/update/{id}', [PostController::class, 'update'])->name('post.update');

Route::get('/posts/delete/{id}', [PostController::class, 'delete'])->name('post.delete');

Route::get('/posts/delete/all', [PostController::class, 'deleteAll'])->name('posts.delete');

Route::get('/posts/delete/all/truncate', [PostController::class, 'deleteAllTruncate'])->name('posts.delete.all.truncate');
