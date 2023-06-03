<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\PostController;

Route::get('/my_page',[PostController::class, 'index']);

Route::get('/', function () {
    return 'aaaaaaaaaa';
});
