<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\LeadFormController;

Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('about_us', [MainController::class, 'aboutUs'])->name('about_us');
Route::get('catalog', [MainController::class, 'catalog'])->name('catalog');
Route::get('contacts', [MainController::class, 'contacts'])->name('contacts');
Route::get('news', [NewsController::class, 'getAllNews'])->name('news.allNews');
Route::get('news/{news}', [NewsController::class, 'getOneNews'])->name('news.oneNews');
Route::post('submit/leadform', [LeadFormController::class, 'submit'])->name('leadFormSubmit');

