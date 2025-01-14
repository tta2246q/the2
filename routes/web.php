<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ContactController;
Route::get('/', function () {
    return view('pages.main');
});

Route::get('/about', [AboutController::class, 'index'])->name('index-about');
Route::get('/news',[NewsController::class, 'index'])->name('index-news');
route::get('/contact', [ContactController::class, 'index']) -> name('index');
