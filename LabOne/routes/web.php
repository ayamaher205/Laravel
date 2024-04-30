<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

Route::get('/', function () {
    return view('welcome');
});

#Posts Routes
Route::get('/posts', [PostsController::class,'index'])->name('index');
Route::get('/posts/create',[PostsController::class,'create'])->name('create');;
Route::get('/posts/{id}',[PostsController::class,'show'])->name('posts.show');
Route::get('/posts/{id}/edit',[PostsController::class,'edit'])->name('edit');;
Route::delete('/posts/{id}',[PostsController::class,'destory'])->name('delete');;
