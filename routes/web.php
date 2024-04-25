<?php

use App\HTTP\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get("/", [PostController::class, "index"]);
Route::get("/show/{id}", [PostController::class, "show"]);