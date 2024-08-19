<?php

use App\Http\Controllers\ForumController;
use Illuminate\Support\Facades\Route;
use App\Models\ForumPosts;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/Forum', ForumController::class);