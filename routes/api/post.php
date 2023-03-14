<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\StorePostController;

Route::group(
    [
        'prefix' => 'post',
    ],
    function () {
        Route::get('/list', [PostController::class, 'index']);
        Route::post('/store', [StorePostController::class, 'store']);
    }
);
