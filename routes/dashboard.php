<?php

use App\Http\Controllers\Dashboard\CategoriesController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\productsController;
use App\Http\Controllers\Dashboard\ProfileController;
use App\Http\Controllers\Dashboard\FooterController;

use App\Http\Controllers\Dashboard\HearingArticleController;


use App\Http\Controllers\Dashboard\BlogCategoryController;

use Illuminate\Support\Facades\Route;


Route::group([
    'middleware' => ['auth', 'auth.type:admin,super-admin'],
    'as' => 'dashboard.',
    'prefix' => 'dashboard',
], function () {

    Route::get('profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/footer/edit', [FooterController::class, 'edit'])->name('footer.edit');
    Route::put('/footer/edit', [FooterController::class, 'update'])->name('footer.update');

    Route::get('/', [DashboardController::class, 'index'])
        ->name('dashboard');
    Route::get('/categories/trash', [CategoriesController::class, 'trash'])
        ->name('categories.trash');
    Route::put('categories/{category}/restore', [CategoriesController::class, 'restore'])
        ->name('categories.restore');
    Route::delete('categories/{category}/force-delete', [CategoriesController::class, 'forceDelete'])
        ->name('categories.force-delete');
        
    Route::resource('/categories', CategoriesController::class);
    Route::resource('/products', productsController::class);

    // Blog
    // Route::get('all/blog/category', [CategoriesController::class, 'allBlogCategory'])
    //     ->name('all.blog.category');
    Route::resource('hearing_articles', HearingArticleController::class);
    
    });