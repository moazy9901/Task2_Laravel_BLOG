<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('articles.index');
});
Route::resource('categories', CategoryController::class);
Route::resource('articles', ArticleController::class);
Route::post('/articles/validate-slug', [ArticleController::class, 'validateSlug'])->name('articles.validateSlug');
Route::post('/categories/validate-slug', [CategoryController::class, 'validateSlug'])->name('categories.validateSlug');
