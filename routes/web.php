<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PolicyController;
use App\Http\Controllers\QuestionsController;
use App\Http\Controllers\SetWaterController;
Route::get('/', function () {
    return view('pages.main');
});

Route::get('/about', [AboutController::class, 'index'])->name('index-about');
Route::get('/news',[NewsController::class, 'index'])->name('index-news');
route::get('/contact', [ContactController::class, 'main']) -> name('main-contact');
route::get('/abate', [PolicyController::class, 'abate']) -> name('abate');
route::get('/warranty', [PolicyController::class, 'warranty']) -> name('warranty');
route::get('/confidentiality', [PolicyController::class, 'confidentiality']) -> name('confidentiality');
route::get('/delivery', [PolicyController::class, 'delivery']) -> name('delivery');
route::get('/questions', [QuestionsController::class, 'questions']) -> name('questions');
route::get('/main', [SetWaterController::class, 'main']) -> name('main-setwater');