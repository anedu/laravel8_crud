<?php

use Illuminate\Support\Facades\Route;

use App\Models\Post;
use App\Http\Controllers\PostController;

//CRUD
Route::get('/', [PostController::class, 'show']);

Route::post('/delete', [PostController::class, 'delete']);

Route::post('/insert', [PostController::class, 'create']);

Route::post('/update', [PostController::class, 'update']);