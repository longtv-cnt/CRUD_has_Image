<?php

use App\Models\Posts;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
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

;
Route::prefix('posts')->group(function(){
    Route::get('/',[PostsController::class,'index'])->name('posts.index');
    Route::get('/create',[PostsController::class, 'create'])->name('posts.create');
    Route::post('/store',[PostsController::class, 'store'])->name('posts.store');
    Route::get('/{id}',[PostsController::class, 'show'])->name('posts.show');

    Route::put('/{id}/update',[PostsController::class, 'update'])->name('posts.update');
    Route::get('/{id}/delete',[PostsController::class, 'destroy'])->name('posts.destroy');
});
Route::prefix('images')->group(function(){
    Route::get('/{id}',[PostsController::class, 'delImages'])->name('images.delete');
});
//client
Route::prefix('category')->group(function(){
    Route::get('/',[PostsController::class,'index'])->name('category.index');
    Route::get('/create',[PostsController::class, 'create'])->name('category.create');
    Route::post('/store',[PostsController::class, 'store'])->name('category.store');
    Route::get('/{id}',[PostsController::class, 'show'])->name('category.show');

    Route::put('/{id}/update',[PostsController::class, 'update'])->name('category.update');
    Route::get('/{id}/delete',[PostsController::class, 'destroy'])->name('category.destroy');
});
