<?php

use App\Http\Controllers\Category\CategoryController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('index')->name('index');
// });


Route::get('/', [CategoryController::class, 'index'])->name('index');
Route::get('/category', [CategoryController::class, 'category'])->name('category');
Route::get('/subcategory', [CategoryController::class, 'subcategory'])->name('subcategory');