<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\PostsController;
use App\Http\Controllers\Web\ShowPostController;

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

Route::group(['prefix' => "posts"], function () {
    Route::get('/', [PostsController::class, "index"])
    ->name('posts.index');

    Route::get('/posts/{slug}', [ShowPostController::class, "show"])
    ->name('posts.show');
});
